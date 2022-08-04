//
//  CityGuide
//
//  Created by MagicWorkers on 7.06.2014.
//  Copyright (c) 2014 CityGuide. All rights reserved.
//

#import <UIKit/UIKit.h>
@import MapKit;

@interface SCViewController : UIViewController

@property (weak, nonatomic) IBOutlet MKMapView *mapView;
@property (weak, nonatomic) IBOutlet UIButton *routeButton;
@property (weak, nonatomic) IBOutlet UIButton *routeDetailsButton;
@property (weak, nonatomic) IBOutlet UIActivityIndicatorView *activityIndicator;
- (IBAction)handleRoutePressed:(id)sender;
@property (nonatomic, retain) NSString *description;
@property (nonatomic, retain) NSNumber *longa;
@property (nonatomic, retain) NSNumber *lota;
@end
