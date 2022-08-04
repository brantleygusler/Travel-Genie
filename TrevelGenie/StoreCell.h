//
//  CityGuide
//
//  Created by MagicWorkers on 7.06.2014.
//  Copyright (c) 2014 CityGuide. All rights reserved.
//


#import <UIKit/UIKit.h>

@interface StoreCell : UITableViewCell

@property (nonatomic, weak) IBOutlet UIView *feedContainer;

@property (nonatomic, weak) IBOutlet UIImageView *picImageView;

@property (nonatomic, weak) IBOutlet UIImageView *imaj;

@property (nonatomic, weak) IBOutlet UILabel *descriptionLabel;

@property (nonatomic, weak) IBOutlet UILabel *dateLabel;

@property (nonatomic, weak) IBOutlet UILabel *titleLabel;

@property (nonatomic, weak) IBOutlet UIActivityIndicatorView *activityIndicator;

@end
