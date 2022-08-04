//
//  CityGuideViewController.m
//  CityGuide
//
//  Created by MagicWorkers on 7.06.2014.
//  Copyright (c) 2014 CityGuide. All rights reserved.
//

#import "CityGuideViewController.h"

@interface CityGuideViewController ()

@end

@implementation CityGuideViewController


  NSString * urlStr;



        // CHANGE YOUR PHP STORE FILES REMOTE URL ADDRESSES BETWEEN ""

        NSString *storeurl = @"http://magicworkers.com/CityGuide/stores.php";
        NSString *restourantsurl = @"http://magicworkers.com/CityGuide/restourants.php";
        NSString *banksurl = @"http://magicworkers.com/CityGuide/banks.php";
        NSString *atmurl = @"http://magicworkers.com/CityGuide/atm.php";
        NSString *premiumurl = @"http://magicworkers.com/CityGuide/premium.php";
        NSString *emergencyurl = @"http://magicworkers.com/CityGuide/emergency.php";
        NSString *cafebarurl = @"http://magicworkers.com/CityGuide/cafebar.php";
        NSString *othersurl = @"http://magicworkers.com/CityGuide/others.php";
        NSString *pharmacyurl = @"http://magicworkers.com/CityGuide/pharmacy.php";



- (void)viewDidLoad
{
    [super viewDidLoad];

   
}


- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

-(void)storebutton {
    
    urlStr = storeurl;
    
}
-(void)banksbutton {
    
    urlStr = banksurl;
    
}

-(void)atmbutton {
    
    urlStr = atmurl;
    
}
-(void)restourantsbutton {
    
    urlStr = restourantsurl;
    
}



#pragma mark iAd Delegate Methods

// Method is called when the iAd is loaded.
-(void)bannerViewDidLoadAd:(ADBannerView *)banner {
    
    // Creates animation.
    [UIView beginAnimations:nil context:nil];
    
    // Sets the duration of the animation to 1.
    [UIView setAnimationDuration:1];
    
    // Sets the alpha to 1.
    // We do this because we are going to have it set to 0 to start and setting it to 1 will cause the iAd to fade into view.
    [banner setAlpha:1];
    
    //  Performs animation.
    [UIView commitAnimations];
    
}

// Method is called when the iAd fails to load.
-(void)bannerView:(ADBannerView *)banner didFailToReceiveAdWithError:(NSError *)error {
    
    // Creates animation.
    [UIView beginAnimations:nil context:nil];
    
    // Sets the duration of the animation to 1.
    [UIView setAnimationDuration:1];
    
    // Sets the alpha to 0.
    // We do this because we are going to have it set to 1 to start and setting it to 0 will cause the iAd to fade out of view.
    [banner setAlpha:0];
    
    //  Performs animation.
    [UIView commitAnimations];
    
}



-(void)premiumbutton {
    
    urlStr = premiumurl;
    
}
-(void)emergencybutton {
    
    urlStr = emergencyurl;
    
}
-(void)cafebarbutton {
    
    urlStr = cafebarurl;
    
}
-(void)othersbutton {
    
    urlStr = othersurl;
    
}
-(void)pharmacybutton {
    
    urlStr = pharmacyurl;
    
}



@end
