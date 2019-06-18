        <?php

        //Часовой пояс +3
        exec('tzutil /s "Russian Standard Time"');
        //Исправление формата времени
        exec('REG ADD "HKEY_CURRENT_USER\Control Panel\International" /v sShortDate /t REG_SZ /d dd.MM.yyyy /f');
        exec('REG ADD "HKEY_CURRENT_USER\Control Panel\International" /v sDecimal /t REG_SZ /d , /f');
        // создаем папку для релиза
        exec("mkdir release");
        // получение списка релизов из api github
        $url = 'https://api.github.com/repos/eko-point/feeding/releases';
        $ch = curl_init();
        $headers[] = "Authorization: Bearer 40df1a4fbfc98b5d6dfe8d87f3b4cbe7a51439ea";
        $headers[] = "Content-Type: application/x-www-form-urlencoded";
        $headers[] = 'User-Agent: https://github.com/eko-point';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //$info = curl_getinfo($ch);
        $result = curl_exec($ch);
        //echo  curl_error($ch);
        $r =  json_decode($result, true);
        //print_r($result[1]);
        //print_r($r[0]['assets'][0]['url']);
        $url = ($r[0]['assets'][0]['url']);
        $name = ($r[0]['assets'][0]['name']);
        curl_close($ch);
        ////var_dump($url);
        //var_dump($name);
        // выборка релизов с тегом develop

        foreach ($r as $release => $info) {
            foreach ($info['assets'] as $in) {
                if(stristr($in['name'], 'feeding-develop')){
                    $res[] = array($in['name'] => $in['url']);
                    //echo  $in['name'];
                } 
            };
        };

        print_r($res[0]);

        // получение конкретного последнего релиза
        $name = key($res[0]);
        $url = $res[0][$name];

        $url4 = $url;
        $ch = curl_init();
        $headers[] = "Content-Type: application/json";
        $headers[] = 'User-Agent: https://github.com/eko-point';
        $headers[] = 'Accept: application/octet-stream';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url4);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($ch);
        $response = curl_getinfo( $ch );
        $download_url=$response['redirect_url'];
        echo  curl_error($ch);
        var_dump($response);
        curl_close($ch);
        //сохранение файла в папку
        // строка ниже для того, чтобы у пхп не кончилась память
        ini_set('memory_limit', '-1');
        print_r(' RELEASE NAME ' . $name);
        $local='release/' . $name;
        file_put_contents($local, file_get_contents($download_url));
        // распаковываем zip
        if(!exec('"7-Zip\7z" x -o"release" ' . escapeshellarg($local))) { echo ':( не распаковался архив';};

        //  берем лицензию и перемещает в нужную папку
        $var= file_get_contents('lic.txt');
        $var = base64_decode($var);
        $filename = 'eco-license-any.lic';
        file_put_contents($filename, $var);
        $file = 'eco-license-any.lic';
        $newfile = 'release/feeding-farm-datastore/eco-license-any.lic';
        if (!copy($file, $newfile)) {
        echo "не удалось скопировать $file...\n";        }
        print_r(' RELEASE NAME ' . $name); 
