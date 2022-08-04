//
//  CityGuide
//
//  Created by MagicWorkers on 7.06.2014.
//  Copyright (c) 2014 CityGuide. All rights reserved.
//


#import <UIKit/UIKit.h>
@import MapKit;

@interface SCIndividualStepViewController : UIViewController

@property (weak, nonatomic) IBOutlet UITextView *instructionsTextView;
@property (weak, nonatomic) IBOutlet UILabel *distanceLabel;
@property (weak, nonatomic) IBOutlet MKMapView *mapView;

@property (strong, nonatomic) MKRouteStep *routeStep;
@property (assign, nonatomic) NSUInteger stepIndex;

@end
