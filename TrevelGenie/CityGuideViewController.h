//
//  CityGuideViewController.h
//  CityGuide
//
//  Created by MagicWorkers on 7.06.2014.
//  Copyright (c) 2014 CityGuide. All rights reserved.
//

#import <UIKit/UIKit.h>
#import <iAd/iAd.h>

extern NSString *urlStr;

@interface CityGuideViewController : UIViewController<ADBannerViewDelegate>{
 

  
}

- (IBAction)storebutton;
- (IBAction)banksbutton;
- (IBAction)atmbutton;
- (IBAction)restourantsbutton;
- (IBAction)premiumbutton;
- (IBAction)pharmacybutton;
- (IBAction)emergencybutton;
- (IBAction)cafebarbutton;
- (IBAction)othersbutton;

@end

