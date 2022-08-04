//
//  CityGuide
//
//  Created by MagicWorkers on 7.06.2014.
//  Copyright (c) 2014 CityGuide. All rights reserved.
//


#import <UIKit/UIKit.h>
#import <MessageUI/MessageUI.h>


@interface StoreDetailViewController : UIViewController<MFMailComposeViewControllerDelegate>{

MFMailComposeViewController *mailComposer;
    IBOutlet UIButton *fbView;
    IBOutlet UIButton *twView;

}

-(IBAction)sendMail:(id)sender;

@property (weak, nonatomic) UIViewController *StoreList;
@property (nonatomic, retain) UIButton *fbView;
@property (nonatomic, retain) UIButton *twView;

- (IBAction)postToTwitter:(id)sender;
- (IBAction)postToFacebook:(id)sender;

@end