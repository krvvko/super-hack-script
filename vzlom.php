<?php

function Hack()
{

    echo "Кого мы взламываем? \n";
    $user = readline();

    for ($y = 0; $y <= 100; $y++) {

        usleep(120000);
        echo "\r";
        echo str_repeat('=', $y);
        echo str_repeat('-', 100 - $y);
        echo "    $y%";

    }

    $chance = rand(1, 3);

    sleep(3);

    if ($chance < 3) {

        echo "\nПроцесс работает \n";
        sleep(3);
        echo "Вы взломали $user! Для того, чтобы узнать пароли/логины $user - сбросьте ему это сообщение, и попросите предоставить вам всю необходимую информацию. \n";
        echo "Введите логин $user, который он вам предоставил:";

        $login = readline();

        if ($login == 'не получилось') {

            echo "Блять, ну.... попробуй еще раз, не знаю \n";
            Hack();

        } else {

            echo "Введите пароль $user, который он вам предоставил:";
            $password = readline();

            echo "Логин $user - $login \n";
            echo "Пароль $user - $password \n";
            echo "                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                          .,*/(##%%%%&&&&&&&&&&&&&&%%##/*..                                                                             
                                                                                .,/(##%%%%%%%%&&&&&&&&&&&&&&&&&&&&&&&&@@@@&@@&&&&&&#(,                                                                  
                                                                          .*/((###%%%%%%%%%%&&&&&&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@&@@&&&&(,                                                          
                                                                      ,*//((###%%%%%%%%%%%&&&&&&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&#,                                                    
                                                                   ,*//((####%%%%%%%%%%%&&&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&&&&%/.                                              
                                                                .,*/((####%%%%%%%%%%%%%&&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&&&&&&&&#*                                          
                                                              .,*/((####%%%%%%%%%%%%%%&&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&&&&&&&&%%%*                                      
                                                             ,*/(((######%%%%%%%%%%%%&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&&&&&&&&&&&&%%#,                                  
                                                           .**//((((####%%%%%%%%%%%%&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&&&&&&&&&&&&&%%%#*                               
                                                          .,,*/(((((((((####%%%%%%%&&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&&&&&&&&&&&&&&&%%%%%#,                            
                                                         .**,..  ..........,,**/((#%%%&&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&&&&&&&&&&&&&&&&%%%%%#(*                          
                                                       ..              ....,......,,*/(#%&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&@&&&&&&&&&&&&&&&&&&&&%%%%%%%#(*.                       
                                                                             ..,,,,,...,*(#%&&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&&&&&&&&&&&&&%%%%%%%#(/*.                     
                                                                                  .,,**,,..*(#%&&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&&&&&&%%%&&&&&&&&&&&&&&&&&%%%%%%%%%%%##(/,.                   
                                                           ...,,**,,..                .,*//,..*(%&&&&&&&&&@@@@@@@@@&&&@@@@@@@@@@&&%%%##((//****,,,,,,,**//(##%&&&&&&%%%%%%%%%%%%#(/*,.                  
                                                       ....,,******,,,..                  .,**..*(%&&&&&&&&@@@@@&&&&&&&@&&&&%%#(/**//((###((((////**,,,.,,,,,,,,*(#%&&%%%%%%%%%%%#(/**,.                
                                                   .,**//(((#####(((//*,,..                  .,,.,/%&&&&&&&&&&&&&&&&&&&&%#/,.,*#%%#(*.                    .,***,...,,/#%%%###%%%%%#(/*,,.               
                                                .,/((###%%%%%%%%%%%%%##(/*,,.                 .,*//#&&&&&&&&&&&&&&&&%&%*..,/(*                                     ....,*(%%((##%%##(/*,,.              
                                              .*/(###%%%%%%%%%&&&%%%%%%%%#(/*,..            .,*/##%%&&&&&&&&&&&&&&&&%**/*. .//.                                           .,*///##%##/***,.             
                                             ,/((##%%%%%%%%%&&&&&&&&&&&%%%%%#(/*.       .,//((##%&&&&&&&&@@@&&&&&&&%%%%%%*.,//.      .,*,.        ...,,......                 .,*/###(//**,.            
                                            */(###%%%%%%%%%&&&&&&&&&&&&&&&&%%%%%(*.       .*(#%%&&&&&@@@@@@@@@&&&&&&&&&&&%/   .....      ..,*//*/********,,,,,,,,,..             .*(##(//*,.            
                                           */(#####%%%%%%%%%%###%%%%%&&&&&&&%%%%#(,       . ./%&&&&@@@@@@@@@@@@@@&&&&%%#(*...       ..,*///(((//((((((#####(((((/(//**,..         .*(#((//*,.           
                                          ,/((####%%%%(.      .,...      *(%%%%%#/*.     .....(&&@@@@@@@@@@@@@@@&&&#/,.          .,**//((######%%%%%%&&&&&&&&%%%%%%%%#((*,.        .*(((//*,.           
                                         .*/((#####/    /%%##(///(#%%%%&%#*   ./##(/,....,,*,,/%&@@@@@@@@@@@@@&&%(,         ...,**//(###%%%%&&&&&&&&&&&&&&&&&&&&&&&&&&%%#(*.        .*(((/*,.           
                                         ,/(((###*   *#(//*,.        .,/(##%%%*   ./(//*//(/**(&&@@@@@@@@@@@@&&#/,        ..,*//(###%%%&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%#(*.      .,*/(/**..          
                                         */(((##.  *#(.                     *#%%%(   ,#####((/#&&@@@@@@@@@@@@&#(,.       .,*(##%%%%&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%#/,.   .,.,*//**,.          
                                         ,/((((   /*                            ,(%#, ./%%%%#(%&@@@@@@@@@@@&&%#(*..    ..*/#%%%&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%#(/,...,..,//**,.          
                                      .  .**/,   (                                 .%(  (%%##%&@@@@@@@@@@@&&&%#(/*,....*/##%%%%#/,.         .,*.      ..*(%&&&&&&&&&&&&&&&&&%%#(/*,.,...*//*,..         
                                      .          /%%(*.                             *. (&%%%%&@@@@@@@@@@@@&&%%%##(/***(##/.      .,(&&&&&&&&%%%&&&&&&&%*     *%&&&&&&&&&&&&&%%%#(/*,....*//*,..         
                                     .*...   .*,.       ..*/(###%%%%%&&&&&&&%%%#/, .(%&&%%%%&@@@@@@@@@@@@&&&%%%%%#(((#/.     .(%%#(/.           .*/((//#%&/     *%&&&&&&&&&%%%##(/*,....,***,.          
                                    .,.*/##%%%%%%%%%%%%%%###(((/////(((((##%%&&&&&&&&&&%%#&@@@@@@@@@@@@@&&&%%%%%%%#(##*.   .(,                           */#%/    ,%&&&&&&&%%%#(//*.....,**,,.          
                                   ./(##%%%%%%%%%%%&&&&&&&&&&&&&&&&&&&@@@@@@@@&&&&&&&&&%%&@@@@@@@@@@@@@&&%%%%%%%%%%%%%%%*    .                               /%/    #&&&&%%%%#((/*,...,,,,,,..          
                                 ,((########%%%%%%%&&&&&&&&&&&&&@&@@@@@@@@@@@@@&&&&&&&&%&@@@@@@@@@@@@@&&&%%%%%%%%%%%%%&&&%/. .#&&&/                            ,%,   (&&&%%%##(//*,,..,,,,,...          
                               */(((((######%%%%%%&&&&&&&&&&&&&&&&@@@@@@@@@@@@@&&&&&&&&&@@@@@@@@@@@@@&&&%%####%%%%%%&&&&&&&&%(..,*%&@@&@(.                       **   (%%%%%###((/*,..,,,,...           
                             .///(((((######%%%%%%%&&&&&&&&&&&&&&&&@@@@@@@@@@@&&&&&&&&@@@@@@@@@@@@@@@&&%#####%%%%%%&&&&&&&&&&&&&%(***,*%&&&@&&&&#*.               ..   (%%##((//**,,..,,,,...           
                            .*///(((((########%%%%%&&&&&&&&&&&&&&&&@@@@@@@@@@&&&&&&&&&@@@@@@@@@@@@@@&&%######%%%%%&&&&&&&&&&@@@@@@@&&&%(/*,,*(#%&&&&&&&&&&&@&&&&&&&#    */((((/**,.. .,/*,...           
                           .,*////(((((((#####%%%%%&&&&&&&&&&&&&&&&&&@@@@@@&&&&&&&&&@@@@@@@@@@@@@@@@&&%###%%%%%%&&&&&&&&&&&&@@@@@@@@@@@@@@&&&%%##(*,    ...,,*****,.               .*(#(*...            
                           .*/////((((((((####%%%%%%&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&@@@@@@@@@@@@@@@@&&&%#%%%%%%&%%%&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@&&&&&&&%%%#((//**,...      . ,(#%######(*...            
                           .,*/////(((((((###%%%%%%%%&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&@@@@@@@@@@@@@&&&&%%#%#%%%%&&%%%&&&&&&&&@@@@@@@@@@@@@@@@@@@@@@@@@@@&&&@@@&&&&&&&&&&&&%(, *#(../#####(*....           
                            .**/////(((((####%%%%%%%%%%%&&&&&&&&&&&&&&&&&&&&&&&%%&&&&&&&@@@@@@@&&&&&&%###%%%%%&&&&&&&&&&&&&@@@@@@@@@@@@@@@@@@&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%/,(#,./###(*.. .           
                             .,**////(((((######%%%%%%%%%%%%%%###(((%%&&&&&&&%%#%&&&&&&&&&&&&&&&&&&&%%###%%%%%&&&&&&%&&&&&&@@@@@@@@@@@@@@@&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&(,/(.,(#/*.              
                         ,*    .,,***////((((((((((//////**,,..    ,%%%%%&&&%#*/#%%%%%%&&&&&&&&&&%%%##((###%%&&&&&&&&&%&&&&&&&&@@@@@@@@@@@&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%#*,(//(/*.              
                         *(*      ...,,,,,***,,,...             .,/***,,,*///,,. .*/((######%#%#####((///((#%&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%#*,((((*.              
                         ,##(                            .,*/(#%%%%,.       .,,,.     ...,,,****,,......,*(#%&&&&&&&&&&&&%%((%&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%%(,/(//*               
                         .(##*                    ..*/(##%%%&&&&&&%*.          .,.                      .,(#&&&&&&&&&&&&%%*   .*(%&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%#(*,((*,               
                          /##/,             ,*/((##%%%%%%%&&&&&&&&%/,,,.                                 .....,,*//(######*.     .*(%&&&&&&&&&&&&&&&&&&&&&&%%%%%%%%&&&&&&&&&&&&%%#(*.*(,.               
                          .((*.            ,(#%%%%%%%%%%%&&&&&&&&&&&%#(##(/,                                        .*//(/,,(,.     ,/(%%&&&&&&&&&&&&&&&&&&%%%%%%%%%&&&&&&&&&%%%##/, ./.                
                           */,.            #/#%%%%%%%%%%%%&&&&&&&&&&&&&&&%%#                                         .**,,./%%#/,     .,/#%%%%&&&&&&&&&&&&&&%%%&&&&&&&&&&&&%%%%##/,.  .                 
                           .*,.   .        *&%%%%%%%%%%%&%&&&&&&&&&&&&&&&%                            ,(*(#(.   . ..,*,.../&&&&&%#/,.    .,/(#%%%%%%&&&&&&&%&&&&&&&&&&%&%%%%%##(/,                      
                            **,.            *%%%%%%%%%%%%%&&&&&&&&&&&&&%                                (%&%%%%%%%#(*..*#&&&&&&&&&%%#/,      ,*(####%%%%%%%%%%%%%%%%%%%%%%###(/*,                       
                            .**,.  /         .(%%%%%%%%%%%%%&&&&&&&&%,                                   /&&&&&&&&&&&&&&&&&&&&&&&&&&&%%(*.      .,*/(((########%%%######(((/**.                         
                             ***,.  /                                                 ,(#.                *&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%#(*.        ..,**///////////***,,..                            
                             ./**,  ,,                                             /%&&&&&#                 %&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%#(*..           ...........         ,*                      
                              */**.  /,.                                       ./%&&&&&&&&&&.                .%&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%%%#/,.                         .(#/                       
                              .//*,.  //,,                                  *(%&&&&&&&&&&&&&&,                  %&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&%%/.                       .(%%#*                        
                               *//*,   *(##/**,.                          ./#%%&&&&&&&&&&&&&&&.                     *%&&&&&&&&&&&&&&&&&&&&&&%(*..                      .*#%%#(,                         
                               .//**.   .*/(#%%%####(((///**,,...                   .,*(#%%%&&%.                          ./%&&&&&&&&&&&&%/,.                          .*(##/,                          
                                *//**.    .,*/((###%%%%######(((///*,,.                                                                                    ,.          .*((/.                           
                                 //***.       ,*/((###%%%%%%%%%%%%%###########(((///*.                                                                  /%,           .*//,                             
                                 ,////*          .*//(####%%%%%%%%%%%%%%%%%%%%%%%%%%##########(((*.                                                  *&%,           .,*/*.                              
                                  /////*    ...       .,//(#####%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%########(((/*.  ,,...                            #%%(.        ...,*//*,                                
                                  .*////,    .,,.            ..,*//((####%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#########(((//*,...             ./%&%(.        ..,**/((/,.                                 
                                   ,**///,    ,***,..                  .,*/((((####%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#####%###%%%%%%%%####%%%%#/.         .**/((#(/,.                                   
                                    ,*////,   .,*///****,,,,,....                    ..,/((####%%%%%%%%%%%%%%%%%%%%############%%%%%%%%%##/,.           ,//((##(/,.                                     
                                     */////.   .**////////((///////**,.                          .,*///(((((((((((((((/////////////**,.              .*/(((##(/,.                                       
                                     .**////.  .,*//(((((((((((##((###((*.                                                                         .*/(((#((*.                                          
                                      .,*///*   .*//((((((################*.                                                                     ,/((###(/,.                                            
                                       .,*///*  .,*//(((((#############%###(                  .***//*//***,*,,********,,,,,,,,...             ,*((####(*,                                               
                                        .,**//*  .,*//((((##########%%%%%##.                ((########((((((((((((((////***,,...           .*((####(/,.                                                 
                                         .,*//(/ ..*//((((#########%%%%%%(          .    *//#%%##############(((((((////**,..           .*(((###((*.                                                    
                                          .,*//(/..,*//((((#######%%%%%#,                ./(#%%%%#########((((((((///***,..          ,*(((###((*.                                                       
                                           .,*/((/..,*//(((########%%#(                   /(#############(((((((////**,,.        .,/(((((((/*,                                                          
                                            .,*/((/,,*//((((#########(           .        *(###########(((((((////***,.       .*((((((((/*.                                                             
                                             .,*/((/,*//(((((#######(        # *  /      ./(############(((((/////**,.    .*/((((((((/*.                                                                
                                               ,*/((**///(((((######.          .         ,(###########(((((((///**,....,*/(((((((//*.                                                                   
                                               .,*///*////(((((####(                     /(#########(((((((////**,,,**(###(((//*,.                                                                      
                                                 ,,****////(((((((#(                    *(########(((((((////**,***/###(((//*,.                                                                         
                                                  .,*****///(((((((/                   *(((((((((((((((/////***//(##(((//*,.                                                                            
                                                   .,,,***/////((((/                  ,(((((((((((((//////**/((((((//*,.                                                                                
                                                    ..,,***//////((/                 *(((((((((((////////////////**,.                                                                                   
                                                      ..,,***//////*                *(((((((((////////*/*******,..                                                                                      
                                                        ..,,****///.               */////////////********,,,,..                                                                                         
                                                          ..,,*****               ,*////////********,,,...                                                                                              
                                                            ..,,,,*              .***********,,,,....                                                                                                   
                                                               ....              ,,,,,,,,,,,.....                                                                                                       
                                                                                ..........                                                                                                              
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
";

            function ChoiceYN()
            {

                echo "Хотите еще кого-то взломать? y - да, n - нет\n";

                $choice_y_n = readline();

                switch ($choice_y_n) {

                    case 'y':
                        Hack();
                        break;

                    case 'n':
                        Main();
                        break;

                    default:
                        echo "Дурень, ты не правильно написал. Попробуй еще раз!";
                        ChoiceYN();
                }


            }

            ChoiceYN();

        }

    }

    if ($chance > 2) {

        echo "\nПроцесс не работает. Не удалось взломать $user, ибо у него слишком хорошая защита. Попробуйте еще раз! \n";
        Main();

    }

}

function Main()
{


    echo "Сейчас будем что-то делать. Введите 'hack', если хотите кого-то взломать. \n";

    $choice = readline();

    switch ($choice) {

        case 'hack':
            Hack();
            break;

        default:

            echo 'дуралей, ты неправильно написал!';
            Main();

    }

}

Main();
