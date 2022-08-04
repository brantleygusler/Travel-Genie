//
//  CityGuide
//
//  Created by MagicWorkers on 7.06.2014.
//  Copyright (c) 2014 CityGuide. All rights reserved.
//


#import "Store.h"

@implementation Store

- (void)deserializeDictionary:(NSDictionary *)dict
{
    // store variables
    
    self.title = dict[@"title"];
    self.longitude = dict[@"longitude"];
    self.latitude = dict[@"latitude"];
    NSRange r;
    NSString *s = dict[@"description"];
    NSString *f = dict[@"upload_date"];

    while ((r = [s rangeOfString:@"<[^>]+>" options:NSRegularExpressionSearch]).location != NSNotFound)
        s = [s stringByReplacingCharactersInRange:r withString:@""];
    self.description = [[s componentsSeparatedByCharactersInSet:[NSCharacterSet newlineCharacterSet]] componentsJoinedByString:@" "];
    
    self.uploadDate = [[f componentsSeparatedByCharactersInSet:[NSCharacterSet newlineCharacterSet]] componentsJoinedByString:@" "];
  
    self.storeThumbUrl = dict[@"thumbnail_medium"];
    
    // user
    self.userName = dict[@"user_name"];
    self.userThumbUrl = dict[@"user_portrait_medium"];
}

@end
