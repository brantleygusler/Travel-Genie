//
//  CityGuideAppDelegate.m
//  CityGuide
//
//  Created by MagicWorkers on 7.06.2014.
//  Copyright (c) 2014 CityGuide. All rights reserved.
//

#import "CityGuideAppDelegate.h"

@implementation CityGuideAppDelegate

- (BOOL)application:(UIApplication *)application didFinishLaunchingWithOptions:(NSDictionary *)launchOptions
{
    // Override point for customization after application launch.
    
    sleep(3);
    
    
    
    
    // Handle launching from a notification
    UILocalNotification *locationNotification = [launchOptions objectForKey:UIApplicationLaunchOptionsLocalNotificationKey];
    
    if (locationNotification) {
        
        [application cancelAllLocalNotifications];
    }
    
    
    
    
    // the place where you want to check if this is the first run:
    BOOL didRunBefore = [[NSUserDefaults standardUserDefaults] boolForKey:@"didRunBefore"];
    
    if (!didRunBefore) {
        
        
        // Create new UILocalNotification object.
        UILocalNotification *localNotification = [[UILocalNotification alloc] init];
        
        // Set the date and time of the notification.
        localNotification.fireDate = [NSDate dateWithTimeIntervalSinceNow:10];
        
        // Set the message body of the notification.
        localNotification.alertBody = @"Welcome to CityGuide App. CityGuide App, Successfully installed.";
        
        // Set the time zone of the notification.
        localNotification.timeZone = [NSTimeZone defaultTimeZone];
        
        // Perform the notification.
        [[UIApplication sharedApplication] scheduleLocalNotification:localNotification];
        
        
        // show alert;
        [[NSUserDefaults standardUserDefaults] setBool:YES forKey:@"didRunBefore"];
        [[NSUserDefaults standardUserDefaults] synchronize];
        
    }
    
    

    
    
    
    return YES;
}
							
- (void)applicationWillResignActive:(UIApplication *)application
{
    // Sent when the application is about to move from active to inactive state. This can occur for certain types of temporary interruptions (such as an incoming phone call or SMS message) or when the user quits the application and it begins the transition to the background state.
    // Use this method to pause ongoing tasks, disable timers, and throttle down OpenGL ES frame rates. Games should use this method to pause the game.
}

- (void)applicationDidEnterBackground:(UIApplication *)application
{
    // Use this method to release shared resources, save user data, invalidate timers, and store enough application state information to restore your application to its current state in case it is terminated later. 
    // If your application supports background execution, this method is called instead of applicationWillTerminate: when the user quits.
}

- (void)applicationWillEnterForeground:(UIApplication *)application
{
    // Called as part of the transition from the background to the inactive state; here you can undo many of the changes made on entering the background.
}

- (void)applicationDidBecomeActive:(UIApplication *)application
{
    // Restart any tasks that were paused (or not yet started) while the application was inactive. If the application was previously in the background, optionally refresh the user interface.
}

- (void)applicationWillTerminate:(UIApplication *)application
{
    // Called when the application is about to terminate. Save data if appropriate. See also applicationDidEnterBackground:.
}

@end
