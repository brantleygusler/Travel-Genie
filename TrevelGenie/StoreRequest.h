//
//  CityGuide
//
//  Created by MagicWorkers on 7.06.2014.
//  Copyright (c) 2014 CityGuide. All rights reserved.
//


#import <Foundation/Foundation.h>

@interface StoreRequest : NSObject{
    
 
}

/**
 Sets a callback to be executed when the stores list is downloaded.

 */
- (void)requestStoreList:(void(^)(id responseData))block;
/**
 Sets a callback to be executed when the stores list of a page is downloaded.

 */
- (void)requestStoreListPage:(NSInteger)page response:(void(^)(id responseData))block;
/**
 Sets a callback to be executed when the image preview of a store is downloaded.

 */
- (void)requestStoreThumb:(NSString *)urlStr success:(void(^)(UIImage *image))success failure:(void(^)())failure;

@end
