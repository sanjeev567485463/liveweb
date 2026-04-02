<?php //5a908fe6d0ec1152e65447e2196a3228
/** @noinspection all */

namespace App\Models\Api {

    use App\Models\Accounting as ModelsAccounting;
    use App\Models\Affiliate;
    use App\Models\AffiliateCode;
    use App\Models\AgoraHistory;
    use App\Models\Blog as ModelsBlog;
    use App\Models\BlogCategory as ModelsBlogCategory;
    use App\Models\Bundle as ModelsBundle;
    use App\Models\BundleFilterOption;
    use App\Models\BundleWebinar as ModelsBundleWebinar;
    use App\Models\Cart as ModelsCart;
    use App\Models\Category as ModelsCategory;
    use App\Models\Certificate as ModelsCertificate;
    use App\Models\Comment as ModelsComment;
    use App\Models\ContentDeleteRequest as ModelsContentDeleteRequest;
    use App\Models\CourseForum as ModelsCourseForum;
    use App\Models\CourseForumAnswer as ModelsCourseForumAnswer;
    use App\Models\CourseLearning;
    use App\Models\CourseNoticeboard;
    use App\Models\CoursePersonalNote;
    use App\Models\DeleteAccountRequest as ModelsDeleteAccountRequest;
    use App\Models\Faq as ModelsFaq;
    use App\Models\FeatureWebinar as ModelsFeatureWebinar;
    use App\Models\File as ModelsFile;
    use App\Models\Filter;
    use App\Models\ForumTopic;
    use App\Models\ForumTopicPost;
    use App\Models\Gift as ModelsGift;
    use App\Models\Group;
    use App\Models\GroupUser as ModelsGroupUser;
    use App\Models\InstallmentOrder;
    use App\Models\InstallmentOrderPayment;
    use App\Models\Meeting as ModelsMeeting;
    use App\Models\MeetingTime as ModelsMeetingTime;
    use App\Models\Order;
    use App\Models\OrderItem;
    use App\Models\Prerequisite as ModelsPrerequisite;
    use App\Models\Product as ModelsProduct;
    use App\Models\ProductBadgeContent as ModelsProductBadgeContent;
    use App\Models\ProductCategory;
    use App\Models\ProductDiscount;
    use App\Models\ProductFaq;
    use App\Models\ProductFile;
    use App\Models\ProductMedia;
    use App\Models\ProductOrder as ModelsProductOrder;
    use App\Models\ProductReview;
    use App\Models\ProductSelectedFilterOption;
    use App\Models\ProductSelectedSpecification;
    use App\Models\Promotion;
    use App\Models\Purchase;
    use App\Models\Quiz as ModelsQuiz;
    use App\Models\QuizzesQuestion as ModelsQuizzesQuestion;
    use App\Models\QuizzesQuestionsAnswer as ModelsQuizzesQuestionsAnswer;
    use App\Models\QuizzesResult as ModelsQuizzesResult;
    use App\Models\RegistrationPackage as ModelsRegistrationPackage;
    use App\Models\RelatedCourse;
    use App\Models\RelatedPost;
    use App\Models\RelatedProduct;
    use App\Models\ReserveMeeting as ModelsReserveMeeting;
    use App\Models\Role;
    use App\Models\Sale as ModelsSale;
    use App\Models\SaleLog;
    use App\Models\Session as ModelsSession;
    use App\Models\SessionAttendance;
    use App\Models\SessionAttendanceNotification;
    use App\Models\SessionRemind;
    use App\Models\Subscribe as ModelsSubscribe;
    use App\Models\SubscribeSpecificationItem;
    use App\Models\SubscribeUse;
    use App\Models\Support as ModelsSupport;
    use App\Models\SupportConversation as ModelsSupportConversation;
    use App\Models\SupportDepartment as ModelsSupportDepartment;
    use App\Models\Tag;
    use App\Models\TextLesson as ModelsTextLesson;
    use App\Models\TextLessonAttachment as ModelsTextLessonAttachment;
    use App\Models\Ticket as ModelsTicket;
    use App\Models\TimeSpentOnCourse;
    use App\Models\UpcomingCourse;
    use App\Models\UserBadge;
    use App\Models\UserCommission;
    use App\Models\UserLoginHistory;
    use App\Models\UserMeta;
    use App\Models\UserOccupation;
    use App\Models\UserProfileAttachment;
    use App\Models\UserRegistrationPackage;
    use App\Models\UserSelectedBank;
    use App\Models\UserZoomApi;
    use App\Models\VisitLog;
    use App\Models\Waitlist;
    use App\Models\Webinar as ModelsWebinar;
    use App\Models\WebinarAssignment as ModelsWebinarAssignment;
    use App\Models\WebinarAssignmentAttachment as ModelsWebinarAssignmentAttachment;
    use App\Models\WebinarAssignmentHistory as ModelsWebinarAssignmentHistory;
    use App\Models\WebinarAssignmentHistoryMessage as ModelsWebinarAssignmentHistoryMessage;
    use App\Models\WebinarChapter as ModelsWebinarChapter;
    use App\Models\WebinarChapterItem as ModelsWebinarChapterItem;
    use App\Models\WebinarExtraDescription;
    use App\Models\WebinarFilterOption;
    use App\Models\WebinarPartnerTeacher;
    use App\Models\WebinarReview as ModelsWebinarReview;
    use App\User as AppUser;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\Api\_IH_Accounting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Accounting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_BlogCategory_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_BlogCategory_QB as Api_IH_BlogCategory_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Blog_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Blog_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_BundleWebinar_C as Api_IH_BundleWebinar_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_BundleWebinar_QB as Api_IH_BundleWebinar_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Bundle_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Bundle_QB as Api_IH_Bundle_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Cart_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Cart_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Category_QB as Api_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Certificate_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Certificate_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Comment_C as Api_IH_Comment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Comment_QB as Api_IH_Comment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_ContentDeleteRequest_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_ContentDeleteRequest_QB as Api_IH_ContentDeleteRequest_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_CourseForumAnswer_C as Api_IH_CourseForumAnswer_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_CourseForumAnswer_QB as Api_IH_CourseForumAnswer_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_CourseForum_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_CourseForum_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_DeleteAccountRequest_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_DeleteAccountRequest_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Faq_C as Api_IH_Faq_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Faq_QB as Api_IH_Faq_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Favorite_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Favorite_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_FeatureWebinar_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_FeatureWebinar_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_File_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_File_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Follow_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Follow_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Gift_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Gift_QB as Api_IH_Gift_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_GroupUser_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_GroupUser_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_MeetingTime_C as Api_IH_MeetingTime_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_MeetingTime_QB as Api_IH_MeetingTime_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Meeting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Meeting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Payout_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Payout_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Prerequisite_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Prerequisite_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductBadgeContent_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductBadgeContent_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductBadge_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductBadge_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductOrder_C as Api_IH_ProductOrder_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductOrder_QB as Api_IH_ProductOrder_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Product_QB as Api_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesQuestionsAnswer_C as Api_IH_QuizzesQuestionsAnswer_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesQuestionsAnswer_QB as Api_IH_QuizzesQuestionsAnswer_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesQuestion_C as Api_IH_QuizzesQuestion_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesQuestion_QB as Api_IH_QuizzesQuestion_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesResult_C as Api_IH_QuizzesResult_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesResult_QB as Api_IH_QuizzesResult_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Quiz_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Quiz_QB as Api_IH_Quiz_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_RegistrationPackage_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_RegistrationPackage_QB as Api_IH_RegistrationPackage_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_ReserveMeeting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_ReserveMeeting_QB as Api_IH_ReserveMeeting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_RewardAccounting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_RewardAccounting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Sale_C as Api_IH_Sale_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Sale_QB as Api_IH_Sale_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Session_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Session_QB as Api_IH_Session_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Setting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Setting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Subscribe_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Subscribe_QB as Api_IH_Subscribe_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_SupportConversation_C as Api_IH_SupportConversation_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_SupportConversation_QB as Api_IH_SupportConversation_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_SupportDepartment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_SupportDepartment_QB as Api_IH_SupportDepartment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Support_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Support_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_TextLessonAttachment_C as Api_IH_TextLessonAttachment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_TextLessonAttachment_QB as Api_IH_TextLessonAttachment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_TextLesson_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_TextLesson_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Ticket_C as Api_IH_Ticket_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Ticket_QB as Api_IH_Ticket_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_TrendCategory_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_TrendCategory_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_UserFirebaseSessions_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_UserFirebaseSessions_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_User_C as Api_IH_User_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_User_QB as Api_IH_User_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentAttachment_C as Api_IH_WebinarAssignmentAttachment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentAttachment_QB as Api_IH_WebinarAssignmentAttachment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentHistoryMessage_C as Api_IH_WebinarAssignmentHistoryMessage_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentHistoryMessage_QB as Api_IH_WebinarAssignmentHistoryMessage_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentHistory_C as Api_IH_WebinarAssignmentHistory_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentHistory_QB as Api_IH_WebinarAssignmentHistory_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignment_C as Api_IH_WebinarAssignment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignment_QB as Api_IH_WebinarAssignment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarChapterItem_C as Api_IH_WebinarChapterItem_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarChapterItem_QB as Api_IH_WebinarChapterItem_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarChapter_C as Api_IH_WebinarChapter_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarChapter_QB as Api_IH_WebinarChapter_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarReport_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarReport_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarReview_C as Api_IH_WebinarReview_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarReview_QB as Api_IH_WebinarReview_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Webinar_C as Api_IH_Webinar_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Webinar_QB as Api_IH_Webinar_QB;
    use LaravelIdea\Helper\App\Models\_IH_Accounting_C as Models_IH_Accounting_C;
    use LaravelIdea\Helper\App\Models\_IH_Accounting_QB as Models_IH_Accounting_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateCode_QB;
    use LaravelIdea\Helper\App\Models\_IH_Affiliate_QB;
    use LaravelIdea\Helper\App\Models\_IH_AgoraHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_BlogCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_Blog_C as Models_IH_Blog_C;
    use LaravelIdea\Helper\App\Models\_IH_Blog_QB as Models_IH_Blog_QB;
    use LaravelIdea\Helper\App\Models\_IH_BundleFilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_BundleFilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_BundleWebinar_C;
    use LaravelIdea\Helper\App\Models\_IH_BundleWebinar_QB;
    use LaravelIdea\Helper\App\Models\_IH_Bundle_C as Models_IH_Bundle_C;
    use LaravelIdea\Helper\App\Models\_IH_Bundle_QB;
    use LaravelIdea\Helper\App\Models\_IH_Cart_C as Models_IH_Cart_C;
    use LaravelIdea\Helper\App\Models\_IH_Cart_QB as Models_IH_Cart_QB;
    use LaravelIdea\Helper\App\Models\_IH_Category_C as Models_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_Certificate_C as Models_IH_Certificate_C;
    use LaravelIdea\Helper\App\Models\_IH_Certificate_QB as Models_IH_Certificate_QB;
    use LaravelIdea\Helper\App\Models\_IH_Comment_C;
    use LaravelIdea\Helper\App\Models\_IH_Comment_QB;
    use LaravelIdea\Helper\App\Models\_IH_ContentDeleteRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseForumAnswer_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseForumAnswer_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseForum_C as Models_IH_CourseForum_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseForum_QB as Models_IH_CourseForum_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseLearning_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseNoticeboard_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseNoticeboard_QB;
    use LaravelIdea\Helper\App\Models\_IH_CoursePersonalNote_QB;
    use LaravelIdea\Helper\App\Models\_IH_DeleteAccountRequest_QB as Models_IH_DeleteAccountRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_Faq_C;
    use LaravelIdea\Helper\App\Models\_IH_Faq_QB;
    use LaravelIdea\Helper\App\Models\_IH_FeatureWebinar_QB as Models_IH_FeatureWebinar_QB;
    use LaravelIdea\Helper\App\Models\_IH_File_C as Models_IH_File_C;
    use LaravelIdea\Helper\App\Models\_IH_File_QB as Models_IH_File_QB;
    use LaravelIdea\Helper\App\Models\_IH_Filter_C;
    use LaravelIdea\Helper\App\Models\_IH_Filter_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicPost_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicPost_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopic_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopic_QB;
    use LaravelIdea\Helper\App\Models\_IH_Gift_QB;
    use LaravelIdea\Helper\App\Models\_IH_GroupUser_QB as Models_IH_GroupUser_QB;
    use LaravelIdea\Helper\App\Models\_IH_Group_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrderPayment_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrder_C;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrder_QB;
    use LaravelIdea\Helper\App\Models\_IH_MeetingTime_C;
    use LaravelIdea\Helper\App\Models\_IH_MeetingTime_QB;
    use LaravelIdea\Helper\App\Models\_IH_Meeting_QB as Models_IH_Meeting_QB;
    use LaravelIdea\Helper\App\Models\_IH_OrderItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_Order_QB;
    use LaravelIdea\Helper\App\Models\_IH_Prerequisite_C as Models_IH_Prerequisite_C;
    use LaravelIdea\Helper\App\Models\_IH_Prerequisite_QB as Models_IH_Prerequisite_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductBadgeContent_C as Models_IH_ProductBadgeContent_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductBadgeContent_QB as Models_IH_ProductBadgeContent_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductDiscount_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductDiscount_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductFaq_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductFaq_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductFile_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductFile_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductMedia_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductMedia_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductOrder_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductOrder_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductReview_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductReview_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedFilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedFilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedSpecification_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedSpecification_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_C as Models_IH_Product_C;
    use LaravelIdea\Helper\App\Models\_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\_IH_Promotion_QB;
    use LaravelIdea\Helper\App\Models\_IH_Purchase_C;
    use LaravelIdea\Helper\App\Models\_IH_Purchase_QB;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestionsAnswer_C;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestionsAnswer_QB;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestion_C;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestion_QB;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesResult_C;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesResult_QB;
    use LaravelIdea\Helper\App\Models\_IH_Quiz_C as Models_IH_Quiz_C;
    use LaravelIdea\Helper\App\Models\_IH_Quiz_QB;
    use LaravelIdea\Helper\App\Models\_IH_RegistrationPackage_QB;
    use LaravelIdea\Helper\App\Models\_IH_RelatedCourse_C;
    use LaravelIdea\Helper\App\Models\_IH_RelatedCourse_QB;
    use LaravelIdea\Helper\App\Models\_IH_RelatedPost_C;
    use LaravelIdea\Helper\App\Models\_IH_RelatedPost_QB;
    use LaravelIdea\Helper\App\Models\_IH_RelatedProduct_C;
    use LaravelIdea\Helper\App\Models\_IH_RelatedProduct_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReserveMeeting_C as Models_IH_ReserveMeeting_C;
    use LaravelIdea\Helper\App\Models\_IH_ReserveMeeting_QB;
    use LaravelIdea\Helper\App\Models\_IH_Role_QB;
    use LaravelIdea\Helper\App\Models\_IH_SaleLog_QB;
    use LaravelIdea\Helper\App\Models\_IH_Sale_C;
    use LaravelIdea\Helper\App\Models\_IH_Sale_QB;
    use LaravelIdea\Helper\App\Models\_IH_SessionAttendanceNotification_QB;
    use LaravelIdea\Helper\App\Models\_IH_SessionAttendance_C;
    use LaravelIdea\Helper\App\Models\_IH_SessionAttendance_QB;
    use LaravelIdea\Helper\App\Models\_IH_SessionRemind_C;
    use LaravelIdea\Helper\App\Models\_IH_SessionRemind_QB;
    use LaravelIdea\Helper\App\Models\_IH_Session_C as Models_IH_Session_C;
    use LaravelIdea\Helper\App\Models\_IH_Session_QB;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeSpecificationItem_C;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeSpecificationItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeUse_C;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeUse_QB;
    use LaravelIdea\Helper\App\Models\_IH_Subscribe_QB;
    use LaravelIdea\Helper\App\Models\_IH_SupportConversation_C;
    use LaravelIdea\Helper\App\Models\_IH_SupportConversation_QB;
    use LaravelIdea\Helper\App\Models\_IH_SupportDepartment_QB;
    use LaravelIdea\Helper\App\Models\_IH_Support_C as Models_IH_Support_C;
    use LaravelIdea\Helper\App\Models\_IH_Support_QB as Models_IH_Support_QB;
    use LaravelIdea\Helper\App\Models\_IH_Tag_C;
    use LaravelIdea\Helper\App\Models\_IH_Tag_QB;
    use LaravelIdea\Helper\App\Models\_IH_TextLessonAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_TextLessonAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_TextLesson_C as Models_IH_TextLesson_C;
    use LaravelIdea\Helper\App\Models\_IH_TextLesson_QB as Models_IH_TextLesson_QB;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_C;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_QB;
    use LaravelIdea\Helper\App\Models\_IH_TimeSpentOnCourse_C;
    use LaravelIdea\Helper\App\Models\_IH_TimeSpentOnCourse_QB;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourse_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserBadge_C;
    use LaravelIdea\Helper\App\Models\_IH_UserBadge_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserCommission_C;
    use LaravelIdea\Helper\App\Models\_IH_UserCommission_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserLoginHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_UserLoginHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserMeta_C;
    use LaravelIdea\Helper\App\Models\_IH_UserMeta_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserOccupation_C;
    use LaravelIdea\Helper\App\Models\_IH_UserOccupation_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserProfileAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_UserProfileAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserRegistrationPackage_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserSelectedBank_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserZoomApi_QB;
    use LaravelIdea\Helper\App\Models\_IH_VisitLog_C;
    use LaravelIdea\Helper\App\Models\_IH_VisitLog_QB;
    use LaravelIdea\Helper\App\Models\_IH_Waitlist_C;
    use LaravelIdea\Helper\App\Models\_IH_Waitlist_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentHistoryMessage_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentHistoryMessage_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignment_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignment_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarChapterItem_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarChapterItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarChapter_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarChapter_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarExtraDescription_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarExtraDescription_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarFilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarFilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarPartnerTeacher_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarPartnerTeacher_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarReview_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarReview_QB;
    use LaravelIdea\Helper\App\Models\_IH_Webinar_C;
    use LaravelIdea\Helper\App\Models\_IH_Webinar_QB;
    use LaravelIdea\Helper\App\_IH_User_C;
    use LaravelIdea\Helper\App\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property int|null $user_id
     * @property int|null $creator_id
     * @property int|null $webinar_id
     * @property int|null $meeting_id
     * @property bool $system
     * @property bool $tax
     * @property int $amount
     * @property string $type
     * @property string $type_account
     * @property string|null $description
     * @property int $created_at
     * @property int|null $subscribe_id
     * @property int|null $promotion_id
     * @property string $store_type
     * @property int|null $referred_user_id
     * @property bool $is_affiliate_amount
     * @property bool $is_affiliate_commission
     * @property int|null $registration_package_id
     * @property int|null $product_id
     * @property int|null $bundle_id
     * @property int|null $installment_payment_id
     * @property bool $is_registration_bonus
     * @property int|null $order_item_id
     * @property bool $is_cashback
     * @property int|null $gift_id
     * @property int|null $installment_order_id This field is filled in the seller's financial document to find the installment order
     * @property-read string $balance_type attribute
     * @property-read array $details attribute
     * @property-read string $item attribute
     * @property ModelsBundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property AppUser|null $creator
     * @method BelongsTo|_IH_User_QB creator()
     * @property ModelsGift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentOrderPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentOrderPayment()
     * @property ModelsMeetingTime $meetingTime
     * @method BelongsTo|_IH_MeetingTime_QB meetingTime()
     * @property OrderItem|null $orderItem
     * @method BelongsTo|_IH_OrderItem_QB orderItem()
     * @property ModelsProduct|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property ModelsRegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @property ModelsSubscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property AppUser|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Accounting_QB onWriteConnection()
     * @method _IH_Accounting_QB newQuery()
     * @method static _IH_Accounting_QB on(null|string $connection = null)
     * @method static _IH_Accounting_QB query()
     * @method static _IH_Accounting_QB with(array|string $relations)
     * @method _IH_Accounting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Accounting_C|Accounting[] all()
     * @ownLinks installment_payment_id,\App\Models\InstallmentOrderPayment,id|user_id,\App\User,id|webinar_id,\App\Models\Webinar,id|meeting_id,\App\Models\Meeting,id|subscribe_id,\App\Models\Subscribe,id|promotion_id,\App\Models\Promotion,id|registration_package_id,\App\Models\RegistrationPackage,id|product_id,\App\Models\Product,id|bundle_id,\App\Models\Bundle,id|order_item_id,\App\Models\OrderItem,id|gift_id,\App\Models\Gift,id|installment_order_id,\App\Models\InstallmentOrder,id
     * @mixin _IH_Accounting_QB
     */
    class Accounting extends Model {}
    
    /**
     * @property int $id
     * @property int|null $category_id
     * @property int $author_id
     * @property string $slug
     * @property string $image
     * @property int|null $visit_count
     * @property bool $enable_comment
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $study_time
     * @property-read array $brief attribute
     * @property-read $content attribute
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read $meta_description attribute
     * @property-read $subtitle attribute
     * @property-read $title attribute
     * @property AppUser $author
     * @method BelongsTo|_IH_User_QB author()
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $badges
     * @property-read int $badges_count
     * @method HasMany|_IH_ProductBadgeContent_QB badges()
     * @property ModelsBlogCategory|null $category
     * @method BelongsTo|_IH_BlogCategory_QB category()
     * @property _IH_Comment_C|ModelsComment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property ModelsContentDeleteRequest $deleteRequest
     * @method MorphToMany|_IH_ContentDeleteRequest_QB deleteRequest()
     * @property Models_IH_ProductBadgeContent_C|ModelsProductBadgeContent[] $productBadgeContents
     * @property-read int $product_badge_contents_count
     * @method MorphToMany|Models_IH_ProductBadgeContent_QB productBadgeContents()
     * @property _IH_RelatedPost_C|RelatedPost[] $relatedPosts
     * @property-read int $related_posts_count
     * @method MorphToMany|_IH_RelatedPost_QB relatedPosts()
     * @property _IH_VisitLog_C|VisitLog[] $visits
     * @property-read int $visits_count
     * @method MorphToMany|_IH_VisitLog_QB visits()
     * @method static _IH_Blog_QB onWriteConnection()
     * @method _IH_Blog_QB newQuery()
     * @method static _IH_Blog_QB on(null|string $connection = null)
     * @method static _IH_Blog_QB query()
     * @method static _IH_Blog_QB with(array|string $relations)
     * @method _IH_Blog_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Blog_C|Blog[] all()
     * @ownLinks category_id,\App\Models\BlogCategory,id|author_id,\App\User,id
     * @foreignLinks id,\App\Models\Translation\BlogTranslation,blog_id|id,\App\Models\RelatedPost,post_id
     * @mixin _IH_Blog_QB
     */
    class Blog extends Model {}
    
    /**
     * @property int $id
     * @property string $slug
     * @property string|null $cover_image
     * @property string|null $icon
     * @property string|null $icon2
     * @property string|null $icon2_box_color
     * @property string|null $overlay_image
     * @property-read array $details attribute
     * @property-read $title attribute
     * @method static Api_IH_BlogCategory_QB onWriteConnection()
     * @method Api_IH_BlogCategory_QB newQuery()
     * @method static Api_IH_BlogCategory_QB on(null|string $connection = null)
     * @method static Api_IH_BlogCategory_QB query()
     * @method static Api_IH_BlogCategory_QB with(array|string $relations)
     * @method Api_IH_BlogCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BlogCategory_C|BlogCategory[] all()
     * @foreignLinks id,\App\Models\Blog,category_id|id,\App\Models\Translation\BlogCategoryTranslation,blog_category_id|id,\App\Models\BlogFeaturedCategory,category_id
     * @mixin Api_IH_BlogCategory_QB
     */
    class BlogCategory extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $teacher_id
     * @property int|null $category_id
     * @property string $slug
     * @property string $thumbnail
     * @property string $image_cover
     * @property string|null $video_demo
     * @property string|null $video_demo_source
     * @property int|null $price
     * @property int|null $points
     * @property bool $subscribe
     * @property int|null $access_days Number of days to access the bundle
     * @property string|null $message_for_reviewer
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property bool $certificate
     * @property bool $only_for_students
     * @property-read $description attribute
     * @property-read $duration attribute
     * @property-read bool|null $is_favorite attribute
     * @property-read $seo_description attribute
     * @property-read $summary attribute
     * @property-read $title attribute
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $badges
     * @property-read int $badges_count
     * @method HasMany|_IH_ProductBadgeContent_QB badges()
     * @property _IH_BundleWebinar_C|ModelsBundleWebinar[] $bundleWebinars
     * @property-read int $bundle_webinars_count
     * @method HasMany|_IH_BundleWebinar_QB bundleWebinars()
     * @property ModelsCategory|null $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Comment_C|ModelsComment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property AppUser $creator
     * @method BelongsTo|_IH_User_QB creator()
     * @property ModelsContentDeleteRequest $deleteRequest
     * @method MorphToMany|_IH_ContentDeleteRequest_QB deleteRequest()
     * @property _IH_Faq_C|ModelsFaq[] $faqs
     * @property-read int $faqs_count
     * @method HasMany|_IH_Faq_QB faqs()
     * @property _IH_BundleFilterOption_C|BundleFilterOption[] $filterOptions
     * @property-read int $filter_options_count
     * @method HasMany|_IH_BundleFilterOption_QB filterOptions()
     * @property _IH_WebinarReview_C|ModelsWebinarReview[] $getRateCount
     * @property-read int $get_rate_count_count
     * @method HasMany|_IH_WebinarReview_QB getRateCount()
     * @property Models_IH_ProductBadgeContent_C|ModelsProductBadgeContent[] $productBadgeContent
     * @property-read int $product_badge_content_count
     * @method MorphToMany|Models_IH_ProductBadgeContent_QB productBadgeContent()
     * @property _IH_RelatedCourse_C|RelatedCourse[] $relatedCourses
     * @property-read int $related_courses_count
     * @method MorphToMany|_IH_RelatedCourse_QB relatedCourses()
     * @property _IH_WebinarReview_C|ModelsWebinarReview[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_WebinarReview_QB reviews()
     * @property _IH_Sale_C|ModelsSale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method HasMany|_IH_Tag_QB tags()
     * @property AppUser $teacher
     * @method BelongsTo|_IH_User_QB teacher()
     * @property _IH_Ticket_C|ModelsTicket[] $tickets
     * @property-read int $tickets_count
     * @method HasMany|_IH_Ticket_QB tickets()
     * @property _IH_VisitLog_C|VisitLog[] $visits
     * @property-read int $visits_count
     * @method MorphToMany|_IH_VisitLog_QB visits()
     * @method static Api_IH_Bundle_QB onWriteConnection()
     * @method Api_IH_Bundle_QB newQuery()
     * @method static Api_IH_Bundle_QB on(null|string $connection = null)
     * @method static Api_IH_Bundle_QB query()
     * @method static Api_IH_Bundle_QB with(array|string $relations)
     * @method Api_IH_Bundle_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Bundle_C|Bundle[] all()
     * @ownLinks creator_id,\App\User,id|teacher_id,\App\User,id|category_id,\App\Models\Category,id
     * @foreignLinks id,\App\Models\Translation\BundleTranslation,bundle_id|id,\App\Models\BundleFilterOption,bundle_id|id,\App\Models\Tag,bundle_id|id,\App\Models\Ticket,bundle_id|id,\App\Models\Faq,bundle_id|id,\App\Models\Favorite,bundle_id|id,\App\Models\SpecialOffer,bundle_id|id,\App\Models\WebinarReview,bundle_id|id,\App\Models\Comment,bundle_id|id,\App\Models\Cart,bundle_id|id,\App\Models\SubscribeUse,bundle_id|id,\App\Models\BundleWebinar,bundle_id|id,\App\Models\InstallmentSpecificationItem,bundle_id|id,\App\Models\InstallmentOrder,bundle_id|id,\App\Models\CashbackRuleSpecificationItem,bundle_id|id,\App\Models\DiscountBundle,bundle_id|id,\App\Models\Gift,bundle_id|id,\App\Models\PurchaseNotificationRoleGroupContent,bundle_id|id,\App\Models\AbandonedCartRuleSpecificationItem,bundle_id|id,\App\Models\Certificate,bundle_id|id,\App\Models\SubscribeSpecificationItem,bundle_id|id,\App\Models\OrderItem,bundle_id|id,\App\Models\Sale,bundle_id|id,\App\Models\Accounting,bundle_id|id,\App\Models\CommentReport,bundle_id
     * @mixin Api_IH_Bundle_QB
     */
    class Bundle extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $bundle_id
     * @property int $webinar_id
     * @property int|null $order
     * @property Bundle $bundle
     * @method BelongsTo|Api_IH_Bundle_QB bundle()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static Api_IH_BundleWebinar_QB onWriteConnection()
     * @method Api_IH_BundleWebinar_QB newQuery()
     * @method static Api_IH_BundleWebinar_QB on(null|string $connection = null)
     * @method static Api_IH_BundleWebinar_QB query()
     * @method static Api_IH_BundleWebinar_QB with(array|string $relations)
     * @method Api_IH_BundleWebinar_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_BundleWebinar_C|BundleWebinar[] all()
     * @ownLinks bundle_id,\App\Models\Bundle,id|webinar_id,\App\Models\Webinar,id
     * @mixin Api_IH_BundleWebinar_QB
     */
    class BundleWebinar extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $webinar_id
     * @property int|null $ticket_id
     * @property int $created_at
     * @property int|null $reserve_meeting_id
     * @property int|null $subscribe_id
     * @property int|null $promotion_id
     * @property int|null $special_offer_id
     * @property int|null $product_order_id
     * @property int|null $product_discount_id
     * @property int|null $bundle_id
     * @property int|null $installment_payment_id
     * @property int|null $gift_id
     * @property-read array $details attribute
     * @property-read null $discount attribute
     * @property-read $price attribute
     * @property ModelsBundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property ModelsGift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentPayment()
     * @property ModelsProductOrder|null $productOrder
     * @method BelongsTo|_IH_ProductOrder_QB productOrder()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property ModelsReserveMeeting|null $reserveMeeting
     * @method BelongsTo|_IH_ReserveMeeting_QB reserveMeeting()
     * @property ModelsSubscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property ModelsTicket|null $ticket
     * @method BelongsTo|_IH_Ticket_QB ticket()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Cart_QB onWriteConnection()
     * @method _IH_Cart_QB newQuery()
     * @method static _IH_Cart_QB on(null|string $connection = null)
     * @method static _IH_Cart_QB query()
     * @method static _IH_Cart_QB with(array|string $relations)
     * @method _IH_Cart_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Cart_C|Cart[] all()
     * @ownLinks creator_id,\App\User,id|webinar_id,\App\Models\Webinar,id|ticket_id,\App\Models\Ticket,id|reserve_meeting_id,\App\Models\ReserveMeeting,id|subscribe_id,\App\Models\Subscribe,id|promotion_id,\App\Models\Promotion,id|special_offer_id,\App\Models\SpecialOffer,id|product_order_id,\App\Models\ProductOrder,id|product_discount_id,\App\Models\ProductDiscount,id|bundle_id,\App\Models\Bundle,id|installment_payment_id,\App\Models\InstallmentOrderPayment,id|gift_id,\App\Models\Gift,id
     * @mixin _IH_Cart_QB
     */
    class Cart extends Model {}
    
    /**
     * @property int $id
     * @property int|null $parent_id
     * @property int|null $order
     * @property string|null $icon
     * @property string $slug
     * @property string|null $cover_image
     * @property string|null $icon2
     * @property string|null $icon2_box_color
     * @property string|null $overlay_image
     * @property-read $bottom_seo_content attribute
     * @property-read $bottom_seo_title attribute
     * @property-read array $details attribute
     * @property-read $subtitle attribute
     * @property-read $title attribute
     * @property ModelsCategory|null $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Filter_C|Filter[] $filters
     * @property-read int $filters_count
     * @method HasMany|_IH_Filter_QB filters()
     * @property _IH_Webinar_C|ModelsWebinar[] $getCoursesCount
     * @property-read int $get_courses_count_count
     * @method HasMany|_IH_Webinar_QB getCoursesCount()
     * @property _IH_UserOccupation_C|UserOccupation[] $userOccupations
     * @property-read int $user_occupations_count
     * @method HasMany|_IH_UserOccupation_QB userOccupations()
     * @property _IH_Webinar_C|ModelsWebinar[] $webinars
     * @property-read int $webinars_count
     * @method HasMany|_IH_Webinar_QB webinars()
     * @method static Api_IH_Category_QB onWriteConnection()
     * @method Api_IH_Category_QB newQuery()
     * @method static Api_IH_Category_QB on(null|string $connection = null)
     * @method static Api_IH_Category_QB query()
     * @method static Api_IH_Category_QB with(array|string $relations)
     * @method Api_IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @foreignLinks id,\App\Models\Filter,category_id|id,\App\Models\Webinar,category_id|id,\App\Models\TrendCategory,category_id|id,\App\Models\UserOccupation,category_id|id,\App\Models\Translation\CategoryTranslation,category_id|id,\App\Models\DiscountCategory,category_id|id,\App\Models\Bundle,category_id|id,\App\Models\UpcomingCourse,category_id|id,\App\Models\InstallmentSpecificationItem,category_id|id,\App\Models\CashbackRuleSpecificationItem,category_id|id,\App\Models\AbandonedCartRuleSpecificationItem,category_id|id,\App\Models\SubscribeSpecificationItem,category_id
     * @mixin Api_IH_Category_QB
     */
    class Category extends Model {}
    
    /**
     * @property int $id
     * @property int $quiz_id
     * @property int $quiz_result_id
     * @property int $student_id
     * @property int|null $user_grade
     * @property string|null $file
     * @property int $created_at
     * @property string $type
     * @property int|null $webinar_id
     * @property int|null $bundle_id
     * @property-read array $brief attribute
     * @property-read array $details attribute
     * @property ModelsBundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property ModelsQuiz $quiz
     * @method HasOne|_IH_Quiz_QB quiz()
     * @property ModelsQuizzesResult $quizzesResult
     * @method HasOne|_IH_QuizzesResult_QB quizzesResult()
     * @property AppUser $student
     * @method HasOne|_IH_User_QB student()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Certificate_QB onWriteConnection()
     * @method _IH_Certificate_QB newQuery()
     * @method static _IH_Certificate_QB on(null|string $connection = null)
     * @method static _IH_Certificate_QB query()
     * @method static _IH_Certificate_QB with(array|string $relations)
     * @method _IH_Certificate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Certificate_C|Certificate[] all()
     * @ownLinks quiz_id,\App\Models\Quiz,id|quiz_result_id,\App\Models\QuizzesResult,id|student_id,\App\User,id|webinar_id,\App\Models\Webinar,id|bundle_id,\App\Models\Bundle,id
     * @mixin _IH_Certificate_QB
     */
    class Certificate extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $reply_id
     * @property string|null $comment
     * @property string $status
     * @property int $created_at
     * @property int $webinar_id
     * @property bool $report
     * @property bool $disabled
     * @property int|null $review_id
     * @property int|null $blog_id
     * @property int|null $viewed_at
     * @property int|null $product_id
     * @property int|null $product_review_id
     * @property int|null $bundle_id
     * @property int|null $upcoming_course_id
     * @property-read string $comment_user_type attribute
     * @property-read array $details attribute
     * @property ModelsBlog|null $blog
     * @method BelongsTo|Models_IH_Blog_QB blog()
     * @property ModelsBundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property ModelsProduct|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property ProductReview|null $productReview
     * @method BelongsTo|_IH_ProductReview_QB productReview()
     * @property _IH_Comment_C|ModelsComment[] $replies
     * @property-read int $replies_count
     * @method HasMany|_IH_Comment_QB replies()
     * @property ModelsWebinarReview|null $review
     * @method BelongsTo|_IH_WebinarReview_QB review()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_Comment_QB onWriteConnection()
     * @method Api_IH_Comment_QB newQuery()
     * @method static Api_IH_Comment_QB on(null|string $connection = null)
     * @method static Api_IH_Comment_QB query()
     * @method static Api_IH_Comment_QB with(array|string $relations)
     * @method Api_IH_Comment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_Comment_C|Comment[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|user_id,\App\User,id|review_id,\App\Models\WebinarReview,id|reply_id,\App\Models\Comment,id|product_id,\App\Models\Product,id|bundle_id,\App\Models\Bundle,id|upcoming_course_id,\App\Models\UpcomingCourse,id|product_review_id,\App\Models\ProductReview,id
     * @foreignLinks id,\App\Models\Comment,reply_id|id,\App\Models\CommentReport,comment_id
     * @mixin Api_IH_Comment_QB
     */
    class Comment extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $targetable_id
     * @property string $targetable_type
     * @property string|null $description
     * @property string|null $content_title
     * @property int|null $content_published_date
     * @property int|null $customers_count
     * @property float|null $sales
     * @property string $status
     * @property int $created_at
     * @property ModelsBundle $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property ModelsBlog $post
     * @method BelongsTo|Models_IH_Blog_QB post()
     * @property ModelsProduct $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Model $targetable
     * @method MorphTo targetable()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_ContentDeleteRequest_QB onWriteConnection()
     * @method Api_IH_ContentDeleteRequest_QB newQuery()
     * @method static Api_IH_ContentDeleteRequest_QB on(null|string $connection = null)
     * @method static Api_IH_ContentDeleteRequest_QB query()
     * @method static Api_IH_ContentDeleteRequest_QB with(array|string $relations)
     * @method Api_IH_ContentDeleteRequest_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ContentDeleteRequest_C|ContentDeleteRequest[] all()
     * @ownLinks user_id,\App\User,id
     * @mixin Api_IH_ContentDeleteRequest_QB
     */
    class ContentDeleteRequest extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $user_id
     * @property string $title
     * @property string $description
     * @property string|null $attach
     * @property bool $pin
     * @property int $created_at
     * @property _IH_CourseForumAnswer_C|ModelsCourseForumAnswer[] $answers
     * @property-read int $answers_count
     * @method HasMany|_IH_CourseForumAnswer_QB answers()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_CourseForum_QB onWriteConnection()
     * @method _IH_CourseForum_QB newQuery()
     * @method static _IH_CourseForum_QB on(null|string $connection = null)
     * @method static _IH_CourseForum_QB query()
     * @method static _IH_CourseForum_QB with(array|string $relations)
     * @method _IH_CourseForum_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CourseForum_C|CourseForum[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|user_id,\App\User,id
     * @foreignLinks id,\App\Models\CourseForumAnswer,forum_id
     * @mixin _IH_CourseForum_QB
     */
    class CourseForum extends Model {}
    
    /**
     * @property int $id
     * @property int $forum_id
     * @property int $user_id
     * @property string $description
     * @property bool $pin
     * @property bool $resolved
     * @property int $created_at
     * @property ModelsCourseForum $course_forum
     * @method BelongsTo|Models_IH_CourseForum_QB course_forum()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static Api_IH_CourseForumAnswer_QB onWriteConnection()
     * @method Api_IH_CourseForumAnswer_QB newQuery()
     * @method static Api_IH_CourseForumAnswer_QB on(null|string $connection = null)
     * @method static Api_IH_CourseForumAnswer_QB query()
     * @method static Api_IH_CourseForumAnswer_QB with(array|string $relations)
     * @method Api_IH_CourseForumAnswer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_CourseForumAnswer_C|CourseForumAnswer[] all()
     * @ownLinks user_id,\App\User,id|forum_id,\App\Models\CourseForum,id
     * @mixin Api_IH_CourseForumAnswer_QB
     */
    class CourseForumAnswer extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $created_at
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_DeleteAccountRequest_QB onWriteConnection()
     * @method _IH_DeleteAccountRequest_QB newQuery()
     * @method static _IH_DeleteAccountRequest_QB on(null|string $connection = null)
     * @method static _IH_DeleteAccountRequest_QB query()
     * @method static _IH_DeleteAccountRequest_QB with(array|string $relations)
     * @method _IH_DeleteAccountRequest_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DeleteAccountRequest_C|DeleteAccountRequest[] all()
     * @ownLinks user_id,\App\User,id
     * @mixin _IH_DeleteAccountRequest_QB
     */
    class DeleteAccountRequest extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $creator_id
     * @property int|null $created_at
     * @property int|null $updated_at
     * @property int|null $order
     * @property int|null $bundle_id
     * @property int|null $upcoming_course_id
     * @property-read $answer attribute
     * @property-read array $details attribute
     * @property-read $title attribute
     * @method static Api_IH_Faq_QB onWriteConnection()
     * @method Api_IH_Faq_QB newQuery()
     * @method static Api_IH_Faq_QB on(null|string $connection = null)
     * @method static Api_IH_Faq_QB query()
     * @method static Api_IH_Faq_QB with(array|string $relations)
     * @method Api_IH_Faq_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_Faq_C|Faq[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|creator_id,\App\User,id|bundle_id,\App\Models\Bundle,id|upcoming_course_id,\App\Models\UpcomingCourse,id
     * @foreignLinks id,\App\Models\Translation\FaqTranslation,faq_id
     * @mixin Api_IH_Faq_QB
     */
    class Faq extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $created_at
     * @property int $webinar_id
     * @property int|null $bundle_id
     * @property int|null $upcoming_course_id
     * @property ModelsBundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property UpcomingCourse|null $upcomingCourse
     * @method BelongsTo|_IH_UpcomingCourse_QB upcomingCourse()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Favorite_QB onWriteConnection()
     * @method _IH_Favorite_QB newQuery()
     * @method static _IH_Favorite_QB on(null|string $connection = null)
     * @method static _IH_Favorite_QB query()
     * @method static _IH_Favorite_QB with(array|string $relations)
     * @method _IH_Favorite_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Favorite_C|Favorite[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|user_id,\App\User,id|bundle_id,\App\Models\Bundle,id|upcoming_course_id,\App\Models\UpcomingCourse,id
     * @mixin _IH_Favorite_QB
     */
    class Favorite extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property string $page
     * @property string $status
     * @property int $updated_at
     * @property-read $description attribute
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_FeatureWebinar_QB onWriteConnection()
     * @method _IH_FeatureWebinar_QB newQuery()
     * @method static _IH_FeatureWebinar_QB on(null|string $connection = null)
     * @method static _IH_FeatureWebinar_QB query()
     * @method static _IH_FeatureWebinar_QB with(array|string $relations)
     * @method _IH_FeatureWebinar_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FeatureWebinar_C|FeatureWebinar[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id
     * @foreignLinks id,\App\Models\Translation\FeatureWebinarTranslation,feature_webinar_id
     * @mixin _IH_FeatureWebinar_QB
     */
    class FeatureWebinar extends Model {}
    
    /**
     * @property int $id
     * @property string $accessibility
     * @property string $file
     * @property string $volume
     * @property string $file_type
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property int $webinar_id
     * @property int $creator_id
     * @property bool $downloadable
     * @property int|null $order
     * @property string $storage
     * @property int|null $chapter_id
     * @property string $status
     * @property string|null $interactive_type
     * @property string|null $interactive_file_name
     * @property string|null $interactive_file_path
     * @property bool $check_previous_parts
     * @property int|null $access_after_day
     * @property bool $online_viewer
     * @property string|null $secure_host_upload_type
     * @property-read bool|null $auth_has_access attribute
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read bool|null $read attribute
     * @property-read $title attribute
     * @property-read bool $user_has_access attribute
     * @property ModelsWebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CourseLearning $learningStatus
     * @method HasOne|_IH_CourseLearning_QB learningStatus()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static _IH_File_QB onWriteConnection()
     * @method _IH_File_QB newQuery()
     * @method static _IH_File_QB on(null|string $connection = null)
     * @method static _IH_File_QB query()
     * @method static _IH_File_QB with(array|string $relations)
     * @method _IH_File_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_File_C|File[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|creator_id,\App\User,id|chapter_id,\App\Models\WebinarChapter,id
     * @foreignLinks id,\App\Models\TextLessonAttachment,file_id|id,\App\Models\CourseLearning,file_id|id,\App\Models\Translation\FileTranslation,file_id
     * @mixin _IH_File_QB
     */
    class File extends Model {}
    
    /**
     * @property int $id
     * @property int $follower
     * @property int $user_id
     * @property string $status
     * @property User $user
     * @method BelongsTo|Api_IH_User_QB user()
     * @property User $userFollower
     * @method BelongsTo|Api_IH_User_QB userFollower()
     * @method static _IH_Follow_QB onWriteConnection()
     * @method _IH_Follow_QB newQuery()
     * @method static _IH_Follow_QB on(null|string $connection = null)
     * @method static _IH_Follow_QB query()
     * @method static _IH_Follow_QB with(array|string $relations)
     * @method _IH_Follow_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Follow_C|Follow[] all()
     * @ownLinks follower,\App\User,id|user_id,\App\User,id
     * @mixin _IH_Follow_QB
     */
    class Follow extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $webinar_id
     * @property int|null $bundle_id
     * @property int|null $product_id
     * @property string $name
     * @property string $email
     * @property int|null $date
     * @property string|null $description
     * @property bool $viewed for show modal in recipient user panel
     * @property string $status
     * @property int $created_at
     * @property ModelsBundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property ModelsProduct|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property AppUser $receipt
     * @method BelongsTo|_IH_User_QB receipt()
     * @property ModelsSale $sale
     * @method HasOne|_IH_Sale_QB sale()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_Gift_QB onWriteConnection()
     * @method Api_IH_Gift_QB newQuery()
     * @method static Api_IH_Gift_QB on(null|string $connection = null)
     * @method static Api_IH_Gift_QB query()
     * @method static Api_IH_Gift_QB with(array|string $relations)
     * @method Api_IH_Gift_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Gift_C|Gift[] all()
     * @ownLinks user_id,\App\User,id|webinar_id,\App\Models\Webinar,id|bundle_id,\App\Models\Bundle,id|product_id,\App\Models\Product,id
     * @foreignLinks id,\App\Models\Cart,gift_id|id,\App\Models\OrderItem,gift_id|id,\App\Models\ProductOrder,gift_id|id,\App\Models\Sale,gift_id|id,\App\Models\Accounting,gift_id
     * @mixin Api_IH_Gift_QB
     */
    class Gift extends Model {}
    
    /**
     * @property int $id
     * @property int $group_id
     * @property int $user_id
     * @property int $created_at
     * @property-read array|null $brief attribute
     * @property Group $group
     * @method BelongsTo|_IH_Group_QB group()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_GroupUser_QB onWriteConnection()
     * @method _IH_GroupUser_QB newQuery()
     * @method static _IH_GroupUser_QB on(null|string $connection = null)
     * @method static _IH_GroupUser_QB query()
     * @method static _IH_GroupUser_QB with(array|string $relations)
     * @method _IH_GroupUser_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_GroupUser_C|GroupUser[] all()
     * @ownLinks group_id,\App\Models\Group,id|user_id,\App\User,id
     * @mixin _IH_GroupUser_QB
     */
    class GroupUser extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int|null $amount
     * @property int|null $discount
     * @property bool $disabled
     * @property int $created_at
     * @property bool $in_person
     * @property int|null $in_person_amount
     * @property bool $group_meeting
     * @property int|null $online_group_min_student
     * @property int|null $online_group_max_student
     * @property int|null $online_group_amount
     * @property int|null $in_person_group_min_student
     * @property int|null $in_person_group_max_student
     * @property int|null $in_person_group_amount
     * @property-read array $details attribute
     * @property AppUser $creator
     * @method BelongsTo|_IH_User_QB creator()
     * @property _IH_MeetingTime_C|ModelsMeetingTime[] $meetingTimes
     * @property-read int $meeting_times_count
     * @method HasMany|_IH_MeetingTime_QB meetingTimes()
     * @property AppUser $teacher
     * @method BelongsTo|_IH_User_QB teacher()
     * @method static _IH_Meeting_QB onWriteConnection()
     * @method _IH_Meeting_QB newQuery()
     * @method static _IH_Meeting_QB on(null|string $connection = null)
     * @method static _IH_Meeting_QB query()
     * @method static _IH_Meeting_QB with(array|string $relations)
     * @method _IH_Meeting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Meeting_C|Meeting[] all()
     * @ownLinks creator_id,\App\User,id|teacher_id,\App\User,id
     * @foreignLinks id,\App\Models\MeetingTime,meeting_id|id,\App\Models\ReserveMeeting,meeting_id|id,\App\Models\OrderItem,meeting_id|id,\App\Models\Sale,meeting_id|id,\App\Models\Accounting,meeting_id
     * @mixin _IH_Meeting_QB
     */
    class Meeting extends Model {}
    
    /**
     * @property int $id
     * @property int $meeting_id
     * @property string $day_label
     * @property string $time
     * @property int $created_at
     * @property string $meeting_type
     * @property string|null $description
     * @property ModelsMeeting $meeting
     * @method BelongsTo|Models_IH_Meeting_QB meeting()
     * @method static Api_IH_MeetingTime_QB onWriteConnection()
     * @method Api_IH_MeetingTime_QB newQuery()
     * @method static Api_IH_MeetingTime_QB on(null|string $connection = null)
     * @method static Api_IH_MeetingTime_QB query()
     * @method static Api_IH_MeetingTime_QB with(array|string $relations)
     * @method Api_IH_MeetingTime_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_MeetingTime_C|MeetingTime[] all()
     * @ownLinks meeting_id,\App\Models\Meeting,id
     * @foreignLinks id,\App\Models\ReserveMeeting,meeting_time_id|id,\App\Models\Sale,meeting_time_id
     * @mixin Api_IH_MeetingTime_QB
     */
    class MeetingTime extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $amount
     * @property string $account_name
     * @property string $account_number
     * @property string $account_bank_name
     * @property string $status
     * @property int $created_at
     * @property int|null $user_selected_bank_id
     * @property-read array $details attribute
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @property UserSelectedBank|null $userSelectedBank
     * @method BelongsTo|_IH_UserSelectedBank_QB userSelectedBank()
     * @method static _IH_Payout_QB onWriteConnection()
     * @method _IH_Payout_QB newQuery()
     * @method static _IH_Payout_QB on(null|string $connection = null)
     * @method static _IH_Payout_QB query()
     * @method static _IH_Payout_QB with(array|string $relations)
     * @method _IH_Payout_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Payout_C|Payout[] all()
     * @ownLinks user_id,\App\User,id|user_selected_bank_id,\App\Models\UserSelectedBank,id
     * @mixin _IH_Payout_QB
     */
    class Payout extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $prerequisite_id
     * @property bool $required
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $order
     * @property ModelsWebinar $prerequisiteWebinar
     * @method BelongsTo|_IH_Webinar_QB prerequisiteWebinar()
     * @method static _IH_Prerequisite_QB onWriteConnection()
     * @method _IH_Prerequisite_QB newQuery()
     * @method static _IH_Prerequisite_QB on(null|string $connection = null)
     * @method static _IH_Prerequisite_QB query()
     * @method static _IH_Prerequisite_QB with(array|string $relations)
     * @method _IH_Prerequisite_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Prerequisite_C|Prerequisite[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|prerequisite_id,\App\Models\Webinar,id
     * @mixin _IH_Prerequisite_QB
     */
    class Prerequisite extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property string $type
     * @property string $slug
     * @property int|null $category_id
     * @property int|null $price
     * @property int|null $point
     * @property bool $unlimited_inventory
     * @property bool $ordering
     * @property int|null $inventory
     * @property int|null $inventory_warning
     * @property int|null $inventory_updated_at
     * @property int|null $delivery_fee
     * @property int|null $delivery_estimated_time
     * @property string|null $message_for_reviewer
     * @property int|null $tax
     * @property int|null $commission
     * @property string $status
     * @property int $updated_at
     * @property int $created_at
     * @property string $commission_type
     * @property-read $description attribute
     * @property-read $images attribute
     * @property-read null $label attribute
     * @property-read $seo_description attribute
     * @property-read $summary attribute
     * @property-read mixed|null $thumbnail attribute
     * @property-read $title attribute
     * @property-read null $video_demo attribute
     * @property-read $waiting_orders attribute
     * @property ProductCategory|null $category
     * @method BelongsTo|_IH_ProductCategory_QB category()
     * @property _IH_Comment_C|ModelsComment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property AppUser $creator
     * @method BelongsTo|_IH_User_QB creator()
     * @property ModelsContentDeleteRequest $deleteRequest
     * @method MorphToMany|_IH_ContentDeleteRequest_QB deleteRequest()
     * @property _IH_ProductDiscount_C|ProductDiscount[] $discounts
     * @property-read int $discounts_count
     * @method HasMany|_IH_ProductDiscount_QB discounts()
     * @property _IH_ProductFaq_C|ProductFaq[] $faqs
     * @property-read int $faqs_count
     * @method HasMany|_IH_ProductFaq_QB faqs()
     * @property _IH_ProductFile_C|ProductFile[] $files
     * @property-read int $files_count
     * @method HasMany|_IH_ProductFile_QB files()
     * @property _IH_ProductMedia_C|ProductMedia[] $getImagesAttribute
     * @property-read int $get_images_attribute_count
     * @method HasMany|_IH_ProductMedia_QB getImagesAttribute()
     * @property _IH_ProductReview_C|ProductReview[] $getRateCount
     * @property-read int $get_rate_count_count
     * @method HasMany|_IH_ProductReview_QB getRateCount()
     * @property _IH_ProductMedia_C|ProductMedia[] $media
     * @property-read int $media_count
     * @method HasMany|_IH_ProductMedia_QB media()
     * @property Models_IH_ProductBadgeContent_C|ModelsProductBadgeContent[] $productBadgeContents
     * @property-read int $product_badge_contents_count
     * @method MorphToMany|Models_IH_ProductBadgeContent_QB productBadgeContents()
     * @property _IH_ProductOrder_C|ModelsProductOrder[] $productOrders
     * @property-read int $product_orders_count
     * @method HasMany|_IH_ProductOrder_QB productOrders()
     * @property _IH_RelatedCourse_C|RelatedCourse[] $relatedCourses
     * @property-read int $related_courses_count
     * @method MorphToMany|_IH_RelatedCourse_QB relatedCourses()
     * @property _IH_RelatedProduct_C|RelatedProduct[] $relatedProducts
     * @property-read int $related_products_count
     * @method MorphToMany|_IH_RelatedProduct_QB relatedProducts()
     * @property _IH_ProductReview_C|ProductReview[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_ProductReview_QB reviews()
     * @property _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] $selectedFilterOptions
     * @property-read int $selected_filter_options_count
     * @method HasMany|_IH_ProductSelectedFilterOption_QB selectedFilterOptions()
     * @property _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] $selectedSpecifications
     * @property-read int $selected_specifications_count
     * @method HasMany|_IH_ProductSelectedSpecification_QB selectedSpecifications()
     * @property _IH_VisitLog_C|VisitLog[] $visits
     * @property-read int $visits_count
     * @method MorphToMany|_IH_VisitLog_QB visits()
     * @method static Api_IH_Product_QB onWriteConnection()
     * @method Api_IH_Product_QB newQuery()
     * @method static Api_IH_Product_QB on(null|string $connection = null)
     * @method static Api_IH_Product_QB query()
     * @method static Api_IH_Product_QB with(array|string $relations)
     * @method Api_IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @ownLinks creator_id,\App\User,id|category_id,\App\Models\ProductCategory,id
     * @foreignLinks id,\App\Models\Translation\ProductTranslation,product_id|id,\App\Models\ProductDiscount,product_id|id,\App\Models\ProductFile,product_id|id,\App\Models\ProductMedia,product_id|id,\App\Models\ProductSelectedFilterOption,product_id|id,\App\Models\ProductSelectedSpecification,product_id|id,\App\Models\ProductFaq,product_id|id,\App\Models\ProductReview,product_id|id,\App\Models\Comment,product_id|id,\App\Models\CommentReport,product_id|id,\App\Models\InstallmentSpecificationItem,product_id|id,\App\Models\InstallmentOrder,product_id|id,\App\Models\CashbackRuleSpecificationItem,product_id|id,\App\Models\Gift,product_id|id,\App\Models\PurchaseNotificationRoleGroupContent,product_id|id,\App\Models\AbandonedCartRuleSpecificationItem,product_id|id,\App\Models\RelatedProduct,product_id|id,\App\Models\Accounting,product_id|id,\App\Models\ProductOrder,product_id
     * @mixin Api_IH_Product_QB
     */
    class Product extends Model {}
    
    /**
     * @property int $id
     * @property string $icon
     * @property string $color
     * @property string $background
     * @property int|null $start_at
     * @property int|null $end_at
     * @property bool $enable
     * @property int $created_at
     * @property-read $title attribute
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $contents
     * @property-read int $contents_count
     * @method HasMany|_IH_ProductBadgeContent_QB contents()
     * @method static _IH_ProductBadge_QB onWriteConnection()
     * @method _IH_ProductBadge_QB newQuery()
     * @method static _IH_ProductBadge_QB on(null|string $connection = null)
     * @method static _IH_ProductBadge_QB query()
     * @method static _IH_ProductBadge_QB with(array|string $relations)
     * @method _IH_ProductBadge_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductBadge_C|ProductBadge[] all()
     * @foreignLinks id,\App\Models\Translation\ProductBadgeTranslation,product_badge_id|id,\App\Models\ProductBadgeContent,product_badge_id
     * @mixin _IH_ProductBadge_QB
     */
    class ProductBadge extends Model {}
    
    /**
     * @property int $id
     * @property int $product_badge_id
     * @property int $targetable_id
     * @property string $targetable_type
     * @property ProductBadge $badge
     * @method BelongsTo|_IH_ProductBadge_QB badge()
     * @property Blog $blog
     * @method BelongsTo|_IH_Blog_QB blog()
     * @property Bundle $bundle
     * @method BelongsTo|Api_IH_Bundle_QB bundle()
     * @property Model $targetable
     * @method MorphTo targetable()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static _IH_ProductBadgeContent_QB onWriteConnection()
     * @method _IH_ProductBadgeContent_QB newQuery()
     * @method static _IH_ProductBadgeContent_QB on(null|string $connection = null)
     * @method static _IH_ProductBadgeContent_QB query()
     * @method static _IH_ProductBadgeContent_QB with(array|string $relations)
     * @method _IH_ProductBadgeContent_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductBadgeContent_C|ProductBadgeContent[] all()
     * @ownLinks product_badge_id,\App\Models\ProductBadge,id
     * @mixin _IH_ProductBadgeContent_QB
     */
    class ProductBadgeContent extends Model {}
    
    /**
     * @property int $id
     * @property int $product_id
     * @property int $seller_id
     * @property int $buyer_id
     * @property int|null $sale_id
     * @property string|null $specifications
     * @property int $quantity
     * @property int|null $discount_id
     * @property string|null $message_to_seller
     * @property string|null $tracking_code
     * @property string $status
     * @property int $created_at
     * @property int|null $installment_order_id
     * @property int|null $gift_id
     * @property AppUser $buyer
     * @method BelongsTo|_IH_User_QB buyer()
     * @property ModelsGift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property ModelsProduct $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property ModelsSale|null $sale
     * @method BelongsTo|_IH_Sale_QB sale()
     * @property AppUser $seller
     * @method BelongsTo|_IH_User_QB seller()
     * @method static Api_IH_ProductOrder_QB onWriteConnection()
     * @method Api_IH_ProductOrder_QB newQuery()
     * @method static Api_IH_ProductOrder_QB on(null|string $connection = null)
     * @method static Api_IH_ProductOrder_QB query()
     * @method static Api_IH_ProductOrder_QB with(array|string $relations)
     * @method Api_IH_ProductOrder_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_ProductOrder_C|ProductOrder[] all()
     * @ownLinks installment_order_id,\App\Models\InstallmentOrder,id|gift_id,\App\Models\Gift,id|product_id,\App\Models\Product,id|sale_id,\App\Models\Sale,id|discount_id,\App\Models\Discount,id
     * @foreignLinks id,\App\Models\Cart,product_order_id|id,\App\Models\InstallmentOrder,product_order_id|id,\App\Models\OrderItem,product_order_id|id,\App\Models\Sale,product_order_id
     * @mixin Api_IH_ProductOrder_QB
     */
    class ProductOrder extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_user_id
     * @property int $time
     * @property int $attempt
     * @property int $pass_mark
     * @property bool $certificate
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property string|null $webinar_title
     * @property int|null $total_mark
     * @property int|null $webinar_id
     * @property int|null $chapter_id
     * @property bool $display_limited_questions
     * @property int|null $display_number_of_questions
     * @property bool $display_questions_randomly
     * @property int|null $expiry_days
     * @property string|null $icon
     * @property-read string $attempt_state attribute
     * @property-read null $auth_attempt_count attribute
     * @property-read bool|null $auth_can_download_certificate attribute
     * @property-read bool|null $auth_can_take_quiz attribute
     * @property-read null|string $auth_can_take_quiz_status attribute
     * @property-read bool|null $auth_passed_quiz attribute
     * @property-read null $auth_results attribute
     * @property-read null|string $auth_status attribute
     * @property-read $average_grade attribute
     * @property-read array $brief attribute
     * @property-read int|string $count_try_again attribute
     * @property-read $description attribute
     * @property-read $details attribute
     * @property-read $latest_students attribute
     * @property-read int $success_rate attribute
     * @property-read $title attribute
     * @property Models_IH_Certificate_C|ModelsCertificate[] $certificates
     * @property-read int $certificates_count
     * @method HasMany|Models_IH_Certificate_QB certificates()
     * @property ModelsWebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property AppUser $creator
     * @method BelongsTo|_IH_User_QB creator()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property _IH_QuizzesQuestion_C|ModelsQuizzesQuestion[] $quizQuestions
     * @property-read int $quiz_questions_count
     * @method HasMany|_IH_QuizzesQuestion_QB quizQuestions()
     * @property _IH_QuizzesResult_C|ModelsQuizzesResult[] $quizResults
     * @property-read int $quiz_results_count
     * @method HasMany|_IH_QuizzesResult_QB quizResults()
     * @property AppUser $teacher
     * @method BelongsTo|_IH_User_QB teacher()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_Quiz_QB onWriteConnection()
     * @method Api_IH_Quiz_QB newQuery()
     * @method static Api_IH_Quiz_QB on(null|string $connection = null)
     * @method static Api_IH_Quiz_QB query()
     * @method static Api_IH_Quiz_QB with(array|string $relations)
     * @method Api_IH_Quiz_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Quiz_C|Quiz[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|creator_id,\App\User,id|chapter_id,\App\Models\WebinarChapter,id
     * @foreignLinks id,\App\Models\Certificate,quiz_id|id,\App\Models\QuizzesResult,quiz_id|id,\App\Models\QuizzesQuestion,quiz_id|id,\App\Models\Translation\QuizTranslation,quiz_id
     * @mixin Api_IH_Quiz_QB
     */
    class Quiz extends Model {}
    
    /**
     * @property int $id
     * @property int $quiz_id
     * @property int $creator_user_id
     * @property string $grade
     * @property string $type
     * @property int $created_at
     * @property int|null $updated_at
     * @property string|null $image
     * @property string|null $video
     * @property int|null $order
     * @property int|null $negative_grade
     * @property-read $answers attribute
     * @property-read $correct attribute
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property _IH_QuizzesQuestionsAnswer_C|ModelsQuizzesQuestionsAnswer[] $quizzesQuestionsAnswers
     * @property-read int $quizzes_questions_answers_count
     * @method HasMany|_IH_QuizzesQuestionsAnswer_QB quizzesQuestionsAnswers()
     * @method static Api_IH_QuizzesQuestion_QB onWriteConnection()
     * @method Api_IH_QuizzesQuestion_QB newQuery()
     * @method static Api_IH_QuizzesQuestion_QB on(null|string $connection = null)
     * @method static Api_IH_QuizzesQuestion_QB query()
     * @method static Api_IH_QuizzesQuestion_QB with(array|string $relations)
     * @method Api_IH_QuizzesQuestion_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_QuizzesQuestion_C|QuizzesQuestion[] all()
     * @ownLinks quiz_id,\App\Models\Quiz,id|creator_user_id,\App\User,id|creator_id,\App\User,id
     * @foreignLinks id,\App\Models\QuizzesQuestionsAnswer,question_id|id,\App\Models\Translation\QuizzesQuestionTranslation,quizzes_question_id
     * @mixin Api_IH_QuizzesQuestion_QB
     */
    class QuizzesQuestion extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_user_id
     * @property int $question_id
     * @property string|null $image
     * @property bool $correct
     * @property int $created_at
     * @property int|null $updated_at
     * @property-read array $details attribute
     * @property-read $title attribute
     * @method static Api_IH_QuizzesQuestionsAnswer_QB onWriteConnection()
     * @method Api_IH_QuizzesQuestionsAnswer_QB newQuery()
     * @method static Api_IH_QuizzesQuestionsAnswer_QB on(null|string $connection = null)
     * @method static Api_IH_QuizzesQuestionsAnswer_QB query()
     * @method static Api_IH_QuizzesQuestionsAnswer_QB with(array|string $relations)
     * @method Api_IH_QuizzesQuestionsAnswer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] all()
     * @ownLinks question_id,\App\Models\QuizzesQuestion,id|creator_user_id,\App\User,id|creator_id,\App\User,id
     * @foreignLinks id,\App\Models\Translation\QuizzesQuestionsAnswerTranslation,quizzes_questions_answer_id
     * @mixin Api_IH_QuizzesQuestionsAnswer_QB
     */
    class QuizzesQuestionsAnswer extends Model {}
    
    /**
     * @property int $id
     * @property int $quiz_id
     * @property int $user_id
     * @property string|null $results
     * @property int|null $user_grade
     * @property string $status
     * @property int $created_at
     * @property-read array $brief attribute
     * @property-read $details attribute
     * @property-read bool $finished attribute
     * @property-read array $quiz_review attribute
     * @property-read bool $reviewable attribute
     * @property Certificate $certificate
     * @method HasOne|_IH_Certificate_QB certificate()
     * @property ModelsQuiz $quiz
     * @method BelongsTo|_IH_Quiz_QB quiz()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static Api_IH_QuizzesResult_QB onWriteConnection()
     * @method Api_IH_QuizzesResult_QB newQuery()
     * @method static Api_IH_QuizzesResult_QB on(null|string $connection = null)
     * @method static Api_IH_QuizzesResult_QB query()
     * @method static Api_IH_QuizzesResult_QB with(array|string $relations)
     * @method Api_IH_QuizzesResult_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_QuizzesResult_C|QuizzesResult[] all()
     * @ownLinks quiz_id,\App\Models\Quiz,id|user_id,\App\User,id
     * @foreignLinks id,\App\Models\Certificate,quiz_result_id
     * @mixin Api_IH_QuizzesResult_QB
     */
    class QuizzesResult extends Model {}
    
    /**
     * @property int $id
     * @property int $days
     * @property int $price
     * @property string $icon
     * @property string $role
     * @property int|null $instructors_count
     * @property int|null $students_count
     * @property int|null $courses_capacity
     * @property int|null $courses_count
     * @property int|null $meeting_count
     * @property string $status
     * @property int $created_at
     * @property int|null $product_count
     * @property bool $ai_content_access
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property _IH_Sale_C|ModelsSale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @method static Api_IH_RegistrationPackage_QB onWriteConnection()
     * @method Api_IH_RegistrationPackage_QB newQuery()
     * @method static Api_IH_RegistrationPackage_QB on(null|string $connection = null)
     * @method static Api_IH_RegistrationPackage_QB query()
     * @method static Api_IH_RegistrationPackage_QB with(array|string $relations)
     * @method Api_IH_RegistrationPackage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RegistrationPackage_C|RegistrationPackage[] all()
     * @foreignLinks id,\App\Models\Translation\RegistrationPackageTranslation,registration_package_id|id,\App\Models\InstallmentSpecificationItem,registration_package_id|id,\App\Models\InstallmentOrder,registration_package_id|id,\App\Models\CashbackRuleSpecificationItem,registration_package_id|id,\App\Models\SpecialOffer,registration_package_id|id,\App\Models\OrderItem,registration_package_id|id,\App\Models\Sale,registration_package_id|id,\App\Models\Accounting,registration_package_id
     * @mixin Api_IH_RegistrationPackage_QB
     */
    class RegistrationPackage extends Model {}
    
    /**
     * @property int $id
     * @property int $meeting_time_id
     * @property int $user_id
     * @property int $paid_amount
     * @property string|null $link
     * @property string|null $password
     * @property string $status
     * @property int $created_at
     * @property string $day
     * @property int|null $locked_at
     * @property int|null $reserved_at
     * @property int|null $discount
     * @property int|null $sale_id
     * @property int $date
     * @property string $meeting_type
     * @property int|null $student_count
     * @property int $start_at
     * @property int $end_at
     * @property string|null $description
     * @property-read array $details attribute
     * @property-read int $user_paid_amount attribute
     * @property ModelsMeeting $meeting
     * @method BelongsTo|Models_IH_Meeting_QB meeting()
     * @property ModelsMeetingTime $meetingTime
     * @method BelongsTo|_IH_MeetingTime_QB meetingTime()
     * @property ModelsSale|null $sale
     * @method BelongsTo|_IH_Sale_QB sale()
     * @property ModelsSession $session
     * @method HasOne|_IH_Session_QB session()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static Api_IH_ReserveMeeting_QB onWriteConnection()
     * @method Api_IH_ReserveMeeting_QB newQuery()
     * @method static Api_IH_ReserveMeeting_QB on(null|string $connection = null)
     * @method static Api_IH_ReserveMeeting_QB query()
     * @method static Api_IH_ReserveMeeting_QB with(array|string $relations)
     * @method Api_IH_ReserveMeeting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ReserveMeeting_C|ReserveMeeting[] all()
     * @ownLinks meeting_id,\App\Models\Meeting,id|meeting_time_id,\App\Models\MeetingTime,id|user_id,\App\User,id|sale_id,\App\Models\Sale,id
     * @foreignLinks id,\App\Models\OrderItem,reserve_meeting_id|id,\App\Models\Cart,reserve_meeting_id|id,\App\Models\Session,reserve_meeting_id
     * @mixin Api_IH_ReserveMeeting_QB
     */
    class ReserveMeeting extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $item_id
     * @property string $type
     * @property int $score
     * @property string $status
     * @property int $created_at
     * @property-read array $details attribute
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_RewardAccounting_QB onWriteConnection()
     * @method _IH_RewardAccounting_QB newQuery()
     * @method static _IH_RewardAccounting_QB on(null|string $connection = null)
     * @method static _IH_RewardAccounting_QB query()
     * @method static _IH_RewardAccounting_QB with(array|string $relations)
     * @method _IH_RewardAccounting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RewardAccounting_C|RewardAccounting[] all()
     * @ownLinks user_id,\App\User,id
     * @mixin _IH_RewardAccounting_QB
     */
    class RewardAccounting extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $order_id
     * @property int|null $webinar_id
     * @property int|null $meeting_id
     * @property int|null $meeting_time_id
     * @property int|null $ticket_id
     * @property string $type
     * @property string $payment_method
     * @property int $amount
     * @property int|null $tax
     * @property int|null $commission
     * @property int|null $discount
     * @property int $total_amount
     * @property int $created_at
     * @property int|null $refund_at
     * @property int $seller_id
     * @property int|null $subscribe_id
     * @property int|null $promotion_id
     * @property int|null $registration_package_id
     * @property int|null $product_order_id
     * @property int|null $bundle_id
     * @property bool $manual_added
     * @property bool $access_to_purchased_item
     * @property float|null $product_delivery_fee
     * @property int|null $installment_payment_id
     * @property int|null $gift_id
     * @property-read array $details attribute
     * @property-read null|string $item_type attribute
     * @property ModelsBundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property AppUser $buyer
     * @method BelongsTo|_IH_User_QB buyer()
     * @property ModelsGift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentOrderPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentOrderPayment()
     * @property ModelsMeeting|null $meeting
     * @method BelongsTo|Models_IH_Meeting_QB meeting()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property ModelsProductOrder|null $productOrder
     * @method BelongsTo|_IH_ProductOrder_QB productOrder()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property ModelsRegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @property SaleLog $saleLog
     * @method HasOne|_IH_SaleLog_QB saleLog()
     * @property AppUser $seller
     * @method BelongsTo|_IH_User_QB seller()
     * @property ModelsSubscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property ModelsTicket|null $ticket
     * @method BelongsTo|_IH_Ticket_QB ticket()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_Sale_QB onWriteConnection()
     * @method Api_IH_Sale_QB newQuery()
     * @method static Api_IH_Sale_QB on(null|string $connection = null)
     * @method static Api_IH_Sale_QB query()
     * @method static Api_IH_Sale_QB with(array|string $relations)
     * @method Api_IH_Sale_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_Sale_C|Sale[] all()
     * @ownLinks user_id,\App\User,id|order_id,\App\Models\Order,id|webinar_id,\App\Models\Webinar,id|meeting_id,\App\Models\Meeting,id|ticket_id,\App\Models\Ticket,id|buyer_id,\App\User,id|seller_id,\App\User,id|promotion_id,\App\Models\Promotion,id|installment_payment_id,\App\Models\InstallmentOrderPayment,id|meeting_time_id,\App\Models\MeetingTime,id|subscribe_id,\App\Models\Subscribe,id|registration_package_id,\App\Models\RegistrationPackage,id|product_order_id,\App\Models\ProductOrder,id|bundle_id,\App\Models\Bundle,id|gift_id,\App\Models\Gift,id
     * @foreignLinks id,\App\Models\SubscribeUse,sale_id|id,\App\Models\SaleLog,sale_id|id,\App\Models\ReserveMeeting,sale_id|id,\App\Models\InstallmentOrderPayment,sale_id|id,\App\Models\ProductOrder,sale_id
     * @mixin Api_IH_Sale_QB
     */
    class Sale extends Model {}
    
    /**
     * @property int $id
     * @property int $date
     * @property int $duration
     * @property string $link
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property int $webinar_id
     * @property int $creator_id
     * @property int|null $order
     * @property string $session_api
     * @property string|null $api_secret
     * @property string|null $moderator_secret
     * @property string|null $zoom_id
     * @property string|null $zoom_start_link
     * @property int|null $chapter_id
     * @property string $status
     * @property string|null $agora_settings
     * @property bool $check_previous_parts
     * @property int|null $access_after_day
     * @property int|null $extra_time_to_join Specifies that the user can see the join button up to a few minutes after the start time of the webinar.
     * @property int|null $reserve_meeting_id
     * @property bool $enable_attendance
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read bool|null $read attribute
     * @property-read $title attribute
     * @property-read bool $user_has_access attribute
     * @property AgoraHistory $agoraHistory
     * @method HasOne|_IH_AgoraHistory_QB agoraHistory()
     * @property SessionAttendanceNotification $attendanceNotification
     * @method HasOne|_IH_SessionAttendanceNotification_QB attendanceNotification()
     * @property _IH_SessionAttendance_C|SessionAttendance[] $attendances
     * @property-read int $attendances_count
     * @method HasMany|_IH_SessionAttendance_QB attendances()
     * @property ModelsWebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property AppUser $creator
     * @method BelongsTo|_IH_User_QB creator()
     * @property CourseLearning $learningStatus
     * @method HasOne|_IH_CourseLearning_QB learningStatus()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property _IH_SessionRemind_C|SessionRemind[] $sessionReminds
     * @property-read int $session_reminds_count
     * @method HasMany|_IH_SessionRemind_QB sessionReminds()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_Session_QB onWriteConnection()
     * @method Api_IH_Session_QB newQuery()
     * @method static Api_IH_Session_QB on(null|string $connection = null)
     * @method static Api_IH_Session_QB query()
     * @method static Api_IH_Session_QB with(array|string $relations)
     * @method Api_IH_Session_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Session_C|Session[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|creator_id,\App\User,id|chapter_id,\App\Models\WebinarChapter,id|reserve_meeting_id,\App\Models\ReserveMeeting,id
     * @foreignLinks id,\App\Models\CourseLearning,session_id|id,\App\Models\SessionRemind,session_id|id,\App\Models\Translation\SessionTranslation,session_id|id,\App\Models\AgoraHistory,session_id|id,\App\Models\SessionAttendance,session_id|id,\App\Models\SessionAttendanceNotification,session_id|id,\App\Models\UserLoginHistory,session_id
     * @mixin Api_IH_Session_QB
     */
    class Session extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property int|null $updated_at
     * @property string $page
     * @property-read $value attribute
     * @method static _IH_Setting_QB onWriteConnection()
     * @method _IH_Setting_QB newQuery()
     * @method static _IH_Setting_QB on(null|string $connection = null)
     * @method static _IH_Setting_QB query()
     * @method static _IH_Setting_QB with(array|string $relations)
     * @method _IH_Setting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Setting_C|Setting[] all()
     * @foreignLinks id,\App\Models\Translation\SettingTranslation,setting_id
     * @mixin _IH_Setting_QB
     */
    class Setting extends Model {}
    
    /**
     * @property int $id
     * @property int $usable_count
     * @property int $days
     * @property int $price
     * @property string $icon
     * @property int $created_at
     * @property bool $is_popular
     * @property bool $infinite_use
     * @property string $target_type
     * @property string|null $target
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read $subtitle attribute
     * @property-read $title attribute
     * @property Models_IH_Bundle_C|ModelsBundle[] $bundles
     * @property-read int $bundles_count
     * @method BelongsToMany|_IH_Bundle_QB bundles()
     * @property Models_IH_Category_C|ModelsCategory[] $categories
     * @property-read int $categories_count
     * @method BelongsToMany|_IH_Category_QB categories()
     * @property _IH_Webinar_C|ModelsWebinar[] $courses
     * @property-read int $courses_count
     * @method BelongsToMany|_IH_Webinar_QB courses()
     * @property _IH_User_C|AppUser[] $instructors
     * @property-read int $instructors_count
     * @method BelongsToMany|_IH_User_QB instructors()
     * @property _IH_Sale_C|ModelsSale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @property _IH_SubscribeSpecificationItem_C|SubscribeSpecificationItem[] $specificationItems
     * @property-read int $specification_items_count
     * @method HasMany|_IH_SubscribeSpecificationItem_QB specificationItems()
     * @property _IH_SubscribeUse_C|SubscribeUse[] $uses
     * @property-read int $uses_count
     * @method HasMany|_IH_SubscribeUse_QB uses()
     * @method static Api_IH_Subscribe_QB onWriteConnection()
     * @method Api_IH_Subscribe_QB newQuery()
     * @method static Api_IH_Subscribe_QB on(null|string $connection = null)
     * @method static Api_IH_Subscribe_QB query()
     * @method static Api_IH_Subscribe_QB with(array|string $relations)
     * @method Api_IH_Subscribe_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Subscribe_C|Subscribe[] all()
     * @foreignLinks id,\App\Models\OrderItem,subscribe_id|id,\App\Models\SubscribeUse,subscribe_id|id,\App\Models\Cart,subscribe_id|id,\App\Models\Translation\SubscribeTranslation,subscribe_id|id,\App\Models\SubscribeRemind,subscribe_id|id,\App\Models\InstallmentSpecificationItem,subscribe_id|id,\App\Models\InstallmentOrder,subscribe_id|id,\App\Models\CashbackRuleSpecificationItem,subscribe_id|id,\App\Models\SpecialOffer,subscribe_id|id,\App\Models\SubscribeSpecificationItem,subscribe_id|id,\App\Models\Sale,subscribe_id|id,\App\Models\Accounting,subscribe_id
     * @mixin Api_IH_Subscribe_QB
     */
    class Subscribe extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $webinar_id
     * @property int|null $department_id
     * @property string $title
     * @property string $status
     * @property int|null $created_at
     * @property int|null $updated_at
     * @property-read array $details attribute
     * @property _IH_SupportConversation_C|ModelsSupportConversation[] $conversations
     * @property-read int $conversations_count
     * @method HasMany|_IH_SupportConversation_QB conversations()
     * @property ModelsSupportDepartment|null $department
     * @method BelongsTo|_IH_SupportDepartment_QB department()
     * @property AppUser $user
     * @method BelongsTo|_IH_User_QB user()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Support_QB onWriteConnection()
     * @method _IH_Support_QB newQuery()
     * @method static _IH_Support_QB on(null|string $connection = null)
     * @method static _IH_Support_QB query()
     * @method static _IH_Support_QB with(array|string $relations)
     * @method _IH_Support_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Support_C|Support[] all()
     * @ownLinks user_id,\App\User,id|webinar_id,\App\Models\Webinar,id|department_id,\App\Models\SupportDepartment,id
     * @foreignLinks id,\App\Models\SupportConversation,support_id|id,\App\Models\SupportConversation,support_id
     * @mixin _IH_Support_QB
     */
    class Support extends Model {}
    
    /**
     * @property int $id
     * @property int $support_id
     * @property int|null $supporter_id
     * @property int|null $sender_id
     * @property string|null $attach
     * @property string $message
     * @property int $created_at
     * @property-read array $brief attribute
     * @property AppUser|null $sender
     * @method BelongsTo|_IH_User_QB sender()
     * @property AppUser|null $supporter
     * @method BelongsTo|_IH_User_QB supporter()
     * @method static Api_IH_SupportConversation_QB onWriteConnection()
     * @method Api_IH_SupportConversation_QB newQuery()
     * @method static Api_IH_SupportConversation_QB on(null|string $connection = null)
     * @method static Api_IH_SupportConversation_QB query()
     * @method static Api_IH_SupportConversation_QB with(array|string $relations)
     * @method Api_IH_SupportConversation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_SupportConversation_C|SupportConversation[] all()
     * @ownLinks support_id,\App\Models\Support,id|sender_id,\App\User,id|supporter_id,\App\User,id|support_id,\App\Models\Support,id|sender_id,\App\User,id
     * @mixin Api_IH_SupportConversation_QB
     */
    class SupportConversation extends Model {}
    
    /**
     * @property int $id
     * @property int $created_at
     * @property string|null $icon
     * @property string|null $color
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property Models_IH_Support_C|ModelsSupport[] $supports
     * @property-read int $supports_count
     * @method HasMany|Models_IH_Support_QB supports()
     * @method static Api_IH_SupportDepartment_QB onWriteConnection()
     * @method Api_IH_SupportDepartment_QB newQuery()
     * @method static Api_IH_SupportDepartment_QB on(null|string $connection = null)
     * @method static Api_IH_SupportDepartment_QB query()
     * @method static Api_IH_SupportDepartment_QB with(array|string $relations)
     * @method Api_IH_SupportDepartment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SupportDepartment_C|SupportDepartment[] all()
     * @foreignLinks id,\App\Models\Support,department_id|id,\App\Models\Translation\SupportDepartmentTranslation,support_department_id
     * @mixin Api_IH_SupportDepartment_QB
     */
    class SupportDepartment extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $webinar_id
     * @property string|null $image
     * @property int|null $study_time
     * @property string $accessibility
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $order
     * @property int|null $chapter_id
     * @property string $status
     * @property bool $check_previous_parts
     * @property int|null $access_after_day
     * @property-read bool|null $auth_has_access attribute
     * @property-read $content attribute
     * @property-read array $details attribute
     * @property-read bool|null $read attribute
     * @property-read $summary attribute
     * @property-read $title attribute
     * @property-read bool $user_has_access attribute
     * @property _IH_TextLessonAttachment_C|ModelsTextLessonAttachment[] $attachments
     * @property-read int $attachments_count
     * @method HasMany|_IH_TextLessonAttachment_QB attachments()
     * @property ModelsWebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CourseLearning $learningStatus
     * @method HasOne|_IH_CourseLearning_QB learningStatus()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static _IH_TextLesson_QB onWriteConnection()
     * @method _IH_TextLesson_QB newQuery()
     * @method static _IH_TextLesson_QB on(null|string $connection = null)
     * @method static _IH_TextLesson_QB query()
     * @method static _IH_TextLesson_QB with(array|string $relations)
     * @method _IH_TextLesson_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TextLesson_C|TextLesson[] all()
     * @ownLinks creator_id,\App\User,id|webinar_id,\App\Models\Webinar,id|chapter_id,\App\Models\WebinarChapter,id
     * @foreignLinks id,\App\Models\TextLessonAttachment,text_lesson_id|id,\App\Models\CourseLearning,text_lesson_id|id,\App\Models\Translation\TextLessonTranslation,text_lesson_id
     * @mixin _IH_TextLesson_QB
     */
    class TextLesson extends Model {}
    
    /**
     * @property int $id
     * @property int $text_lesson_id
     * @property int $file_id
     * @property int $created_at
     * @property-read $details attribute
     * @property ModelsFile $file
     * @method BelongsTo|Models_IH_File_QB file()
     * @method static Api_IH_TextLessonAttachment_QB onWriteConnection()
     * @method Api_IH_TextLessonAttachment_QB newQuery()
     * @method static Api_IH_TextLessonAttachment_QB on(null|string $connection = null)
     * @method static Api_IH_TextLessonAttachment_QB query()
     * @method static Api_IH_TextLessonAttachment_QB with(array|string $relations)
     * @method Api_IH_TextLessonAttachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_TextLessonAttachment_C|TextLessonAttachment[] all()
     * @ownLinks text_lesson_id,\App\Models\TextLesson,id|file_id,\App\Models\File,id
     * @mixin Api_IH_TextLessonAttachment_QB
     */
    class TextLessonAttachment extends Model {}
    
    /**
     * @property int $id
     * @property int|null $start_date
     * @property int|null $end_date
     * @property int $discount
     * @property int|null $capacity
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property int $webinar_id
     * @property int $creator_id
     * @property int|null $order
     * @property int|null $bundle_id
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property Bundle|null $bundle
     * @method BelongsTo|Api_IH_Bundle_QB bundle()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static Api_IH_Ticket_QB onWriteConnection()
     * @method Api_IH_Ticket_QB newQuery()
     * @method static Api_IH_Ticket_QB on(null|string $connection = null)
     * @method static Api_IH_Ticket_QB query()
     * @method static Api_IH_Ticket_QB with(array|string $relations)
     * @method Api_IH_Ticket_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_Ticket_C|Ticket[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|creator_id,\App\User,id|bundle_id,\App\Models\Bundle,id
     * @foreignLinks id,\App\Models\Cart,ticket_id|id,\App\Models\OrderItem,ticket_id|id,\App\Models\Sale,ticket_id|id,\App\Models\TicketUser,ticket_id|id,\App\Models\Translation\TicketTranslation,ticket_id
     * @mixin Api_IH_Ticket_QB
     */
    class Ticket extends Model {}
    
    /**
     * @property int $id
     * @property int $category_id
     * @property string $icon
     * @property string $color
     * @property int $created_at
     * @property-read array $details attribute
     * @property ModelsCategory $category
     * @method BelongsTo|_IH_Category_QB category()
     * @method static _IH_TrendCategory_QB onWriteConnection()
     * @method _IH_TrendCategory_QB newQuery()
     * @method static _IH_TrendCategory_QB on(null|string $connection = null)
     * @method static _IH_TrendCategory_QB query()
     * @method static _IH_TrendCategory_QB with(array|string $relations)
     * @method _IH_TrendCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TrendCategory_C|TrendCategory[] all()
     * @ownLinks category_id,\App\Models\Category,id
     * @mixin _IH_TrendCategory_QB
     */
    class TrendCategory extends Model {}
    
    /**
     * @property int $id
     * @property string|null $full_name
     * @property string $role_name
     * @property int $role_id
     * @property string|null $avatar
     * @property string|null $mobile
     * @property string $email
     * @property string $password
     * @property string|null $google_id
     * @property string|null $facebook_id
     * @property string|null $remember_token
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property string|null $headline
     * @property string|null $about
     * @property int|null $organ_id
     * @property bool $identity
     * @property string|null $cover_img
     * @property string|null $language
     * @property bool $newsletter
     * @property bool $public_message
     * @property string|null $account_type
     * @property string|null $iban
     * @property string|null $account_id
     * @property string|null $identity_scan
     * @property string|null $address
     * @property string|null $bio
     * @property bool $ban
     * @property int|null $ban_start_at
     * @property int|null $ban_end_at
     * @property int|null $commission
     * @property bool $offline
     * @property string|null $offline_message
     * @property bool $financial_approval
     * @property bool $installment_approval
     * @property bool $enable_installments
     * @property bool $disable_cashback
     * @property string|null $certificate
     * @property bool $affiliate
     * @property int|null $country_id
     * @property int|null $province_id
     * @property int|null $city_id
     * @property int|null $district_id
     * @property array|null $location
     * @property bool $group_meeting
     * @property string $meeting_type
     * @property string|null $timezone
     * @property bool $can_create_store Despite disabling the store feature in the settings, we can enable this feature for that user through the edit page of a user and turning on the store toggle.
     * @property bool $access_content
     * @property string|null $avatar_settings
     * @property int $logged_count
     * @property string|null $currency
     * @property bool $enable_registration_bonus
     * @property float|null $registration_bonus_amount
     * @property bool $enable_ai_content
     * @property bool $enable_profile_statistics
     * @property string|null $profile_video
     * @property string|null $username
     * @property string|null $profile_secondary_image
     * @property string|null $theme_color_mode
     * @property bool $auto_renew_subscription
     * @property-read bool $auth_user_is_follower attribute
     * @property-read $available_points attribute
     * @property-read $badges attribute
     * @property-read array $brief attribute
     * @property-read $details attribute
     * @property-read array $financial attribute
     * @property-read bool $has_active_subscription attribute
     * @property-read array|null $level_of_training attribute
     * @property-read string $meeting_status attribute
     * @property-read void $role_label attribute
     * @property-read int $spent_points attribute
     * @property-read $students attribute
     * @property-read int $total_points attribute
     * @property Models_IH_ReserveMeeting_C|ModelsReserveMeeting[] $ReserveMeetings
     * @property-read int $reserve_meetings_count
     * @method HasMany|_IH_ReserveMeeting_QB ReserveMeetings()
     * @property Models_IH_Accounting_C|ModelsAccounting[] $accounting
     * @property-read int $accounting_count
     * @method HasMany|Models_IH_Accounting_QB accounting()
     * @property AffiliateCode $affiliateCode
     * @method HasOne|_IH_AffiliateCode_QB affiliateCode()
     * @property Affiliate $affiliates
     * @method HasOne|_IH_Affiliate_QB affiliates()
     * @property Models_IH_Blog_C|ModelsBlog[] $blog
     * @property-read int $blog_count
     * @method HasMany|Models_IH_Blog_QB blog()
     * @property Models_IH_Cart_C|ModelsCart[] $carts
     * @property-read int $carts_count
     * @method HasMany|Models_IH_Cart_QB carts()
     * @property Models_IH_Certificate_C|ModelsCertificate[] $certificates
     * @property-read int $certificates_count
     * @method HasMany|Models_IH_Certificate_QB certificates()
     * @property _IH_UserCommission_C|UserCommission[] $commissions
     * @property-read int $commissions_count
     * @method HasMany|_IH_UserCommission_QB commissions()
     * @property _IH_UserBadge_C|UserBadge[] $customBadges
     * @property-read int $custom_badges_count
     * @method HasMany|_IH_UserBadge_QB customBadges()
     * @property ModelsDeleteAccountRequest $deleteAccountRequest
     * @method HasOne|Models_IH_DeleteAccountRequest_QB deleteAccountRequest()
     * @property _IH_ForumTopicPost_C|ForumTopicPost[] $forumTopicPosts
     * @property-read int $forum_topic_posts_count
     * @method HasMany|_IH_ForumTopicPost_QB forumTopicPosts()
     * @property _IH_ForumTopic_C|ForumTopic[] $forumTopics
     * @property-read int $forum_topics_count
     * @method HasMany|_IH_ForumTopic_QB forumTopics()
     * @property _IH_InstallmentOrder_C|InstallmentOrder[] $installmentOrders
     * @property-read int $installment_orders_count
     * @method HasMany|_IH_InstallmentOrder_QB installmentOrders()
     * @property _IH_UserLoginHistory_C|UserLoginHistory[] $loginHistories
     * @property-read int $login_histories_count
     * @method HasMany|_IH_UserLoginHistory_QB loginHistories()
     * @property ModelsMeeting $meeting
     * @method HasOne|Models_IH_Meeting_QB meeting()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_UserOccupation_C|UserOccupation[] $occupations
     * @property-read int $occupations_count
     * @method HasMany|_IH_UserOccupation_QB occupations()
     * @property _IH_ProductOrder_C|ModelsProductOrder[] $productOrdersAsBuyer
     * @property-read int $product_orders_as_buyer_count
     * @method HasMany|_IH_ProductOrder_QB productOrdersAsBuyer()
     * @property _IH_ProductOrder_C|ModelsProductOrder[] $productOrdersAsSeller
     * @property-read int $product_orders_as_seller_count
     * @method HasMany|_IH_ProductOrder_QB productOrdersAsSeller()
     * @property Models_IH_Product_C|ModelsProduct[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @property _IH_UserProfileAttachment_C|UserProfileAttachment[] $profileAttachments
     * @property-read int $profile_attachments_count
     * @method HasMany|_IH_UserProfileAttachment_QB profileAttachments()
     * @property Api_IH_Sale_C|Sale[] $purchases
     * @property-read int $purchases_count
     * @method HasMany|Api_IH_Sale_QB purchases()
     * @property Api_IH_QuizzesResult_C|QuizzesResult[] $quizResults
     * @property-read int $quiz_results_count
     * @method HasMany|Api_IH_QuizzesResult_QB quizResults()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property Role $role
     * @method BelongsTo|_IH_Role_QB role()
     * @property UserSelectedBank $selectedBank
     * @method HasOne|_IH_UserSelectedBank_QB selectedBank()
     * @property _IH_SessionAttendance_C|SessionAttendance[] $sessionAttendance
     * @property-read int $session_attendance_count
     * @method HasMany|_IH_SessionAttendance_QB sessionAttendance()
     * @property Models_IH_Support_C|ModelsSupport[] $supports
     * @property-read int $supports_count
     * @method HasMany|Models_IH_Support_QB supports()
     * @property _IH_TimeSpentOnCourse_C|TimeSpentOnCourse[] $timesSpentOnCourse
     * @property-read int $times_spent_on_course_count
     * @method HasMany|_IH_TimeSpentOnCourse_QB timesSpentOnCourse()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @property _IH_Quiz_C|Quiz[] $userCreatedQuizzes
     * @property-read int $user_created_quizzes_count
     * @method HasMany|Api_IH_Quiz_QB userCreatedQuizzes()
     * @property ModelsGroupUser $userGroup
     * @method BelongsTo|Models_IH_GroupUser_QB userGroup()
     * @property _IH_UserMeta_C|UserMeta[] $userMetas
     * @property-read int $user_metas_count
     * @method HasMany|_IH_UserMeta_QB userMetas()
     * @property UserRegistrationPackage $userRegistrationPackage
     * @method HasOne|_IH_UserRegistrationPackage_QB userRegistrationPackage()
     * @property _IH_Webinar_C|ModelsWebinar[] $webinars
     * @property-read int $webinars_count
     * @method HasMany|_IH_Webinar_QB webinars()
     * @property UserZoomApi $zoomApi
     * @method HasOne|_IH_UserZoomApi_QB zoomApi()
     * @method static Api_IH_User_QB onWriteConnection()
     * @method Api_IH_User_QB newQuery()
     * @method static Api_IH_User_QB on(null|string $connection = null)
     * @method static Api_IH_User_QB query()
     * @method static Api_IH_User_QB with(array|string $relations)
     * @method Api_IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_User_C|User[] all()
     * @ownLinks country_id,\App\Models\Region,id|province_id,\App\Models\Region,id|city_id,\App\Models\Region,id|district_id,\App\Models\Region,id|role_id,\App\Models\Role,id
     * @foreignLinks id,\App\Models\Webinar,teacher_id|id,\App\Models\Webinar,creator_user_id|id,\App\Models\WebinarPartnerTeacher,teacher_id|id,\App\Models\Certificate,student_id|id,\App\Models\Purchase,user_id|id,\App\Models\Favorite,user_id|id,\App\Models\Comment,user_id|id,\App\Models\QuizzesResult,user_id|id,\App\Models\QuizzesQuestionsAnswer,creator_user_id|id,\App\Models\QuizzesQuestion,creator_user_id|id,\App\Models\WebinarReview,creator_user_id|id,\App\Models\Meeting,creator_id|id,\App\Models\Meeting,teacher_id|id,\App\Models\ReserveMeeting,user_id|id,\App\Models\Follow,follower|id,\App\Models\Follow,user_id|id,\App\Models\Webinar,creator_id|id,\App\Models\WebinarReview,creator_id|id,\App\Models\QuizzesQuestionsAnswer,creator_id|id,\App\Models\QuizzesQuestion,creator_id|id,\App\Models\Quiz,creator_id|id,\App\Models\UserMeta,user_id|id,\App\Models\Cart,creator_id|id,\App\Models\Order,user_id|id,\App\Models\OrderItem,user_id|id,\App\Models\Sale,user_id|id,\App\Models\Discount,creator_id|id,\App\Models\DiscountUser,user_id|id,\App\Models\TicketUser,user_id|id,\App\Models\Group,creator_id|id,\App\Models\GroupUser,user_id|id,\App\Models\UserBadge,user_id|id,\App\Models\Payout,user_id|id,\App\Models\Sale,buyer_id|id,\App\Models\Sale,seller_id|id,\App\Models\Support,user_id|id,\App\Models\OfflinePayment,user_id|id,\App\Models\SupportConversation,sender_id|id,\App\Models\SupportConversation,supporter_id|id,\App\Models\UserOccupation,user_id|id,\App\Models\File,creator_id|id,\App\Models\Ticket,creator_id|id,\App\Models\Session,creator_id|id,\App\Models\Faq,creator_id|id,\App\Models\TextLesson,creator_id|id,\App\Models\SubscribeUse,user_id|id,\App\Models\CourseLearning,user_id|id,\App\Models\BecomeInstructor,user_id|id,\App\Models\Notification,user_id|id,\App\Models\SpecialOffer,creator_id|id,\App\Models\SupportConversation,sender_id|id,\App\Models\Verification,user_id|id,\App\Models\Noticeboard,organ_id|id,\App\Models\Noticeboard,user_id|id,\App\Models\SessionRemind,user_id|id,\App\Models\UserZoomApi,user_id|id,\App\Models\WebinarChapter,user_id|id,\App\Models\AffiliateCode,user_id|id,\App\Models\Affiliate,affiliate_user_id|id,\App\Models\Affiliate,referred_user_id|id,\App\Models\UserRegistrationPackage,user_id|id,\App\Models\Product,creator_id|id,\App\Models\ProductDiscount,creator_id|id,\App\Models\ProductFile,creator_id|id,\App\Models\ProductMedia,creator_id|id,\App\Models\ProductSelectedSpecification,creator_id|id,\App\Models\ProductFaq,creator_id|id,\App\Models\ProductReview,creator_id|id,\App\Models\WebinarChapterItem,user_id|id,\App\Models\WebinarAssignment,creator_id|id,\App\Models\WebinarAssignmentHistory,instructor_id|id,\App\Models\WebinarAssignmentHistory,student_id|id,\App\Models\Bundle,creator_id|id,\App\Models\Bundle,teacher_id|id,\App\Models\CourseNoticeboard,creator_id|id,\App\Models\CourseForum,user_id|id,\App\Models\CourseForumAnswer,user_id|id,\App\Models\ForumTopic,creator_id|id,\App\Models\ForumTopicAttachment,creator_id|id,\App\Models\ForumTopicPost,user_id|id,\App\Models\ForumTopicReport,user_id|id,\App\Models\ForumTopicBookmark,user_id|id,\App\Models\ForumTopicLike,user_id|id,\App\Models\UserCookieSecurity,user_id|id,\App\Models\SubscribeRemind,user_id|id,\App\Models\Noticeboard,instructor_id|id,\App\Models\WebinarExtraDescription,creator_id|id,\App\Models\DeleteAccountRequest,user_id|id,\App\Models\UpcomingCourse,creator_id|id,\App\Models\UpcomingCourse,teacher_id|id,\App\Models\UpcomingCourseFollower,user_id|id,\App\Models\UpcomingCourseReport,user_id|id,\App\Models\InstallmentSpecificationItem,instructor_id|id,\App\Models\InstallmentSpecificationItem,seller_id|id,\App\Models\InstallmentOrder,user_id|id,\App\Models\CashbackRuleSpecificationItem,instructor_id|id,\App\Models\CashbackRuleSpecificationItem,seller_id|id,\App\Models\CashbackRuleUserGroup,user_id|id,\App\Models\InstallmentReminder,user_id|id,\App\Models\Waitlist,user_id|id,\App\Models\UserSelectedBank,user_id|id,\App\Models\Gift,user_id|id,\App\Models\SelectedInstallment,user_id|id,\App\Models\FormRoleUserGroup,user_id|id,\App\Models\FormSubmission,user_id|id,\App\Models\UserFormField,user_id|id,\App\Models\Api\UserFirebaseSessions,user_id|id,\App\Models\AiContent,user_id|id,\App\Models\RelatedCourse,creator_id|id,\App\Models\PurchaseNotificationHistory,user_id|id,\App\Models\CoursePersonalNote,user_id|id,\App\Models\ContentDeleteRequest,user_id|id,\App\Models\UserLoginHistory,user_id|id,\App\Models\CourseLearningLastView,user_id|id,\App\Models\UserProfileAttachment,user_id|id,\App\Models\AbandonedCartRuleUserGroup,user_id|id,\App\Models\AbandonedCartRuleSpecificationItem,instructor_id|id,\App\Models\AbandonedCartRuleSpecificationItem,seller_id|id,\App\Models\UserCommission,user_id|id,\App\Models\Noticeboard,sender_id|id,\App\Models\SessionAttendance,student_id|id,\App\Models\Blog,author_id|id,\App\Models\BulkImport,user_id|id,\App\Models\SubscribeSpecificationItem,instructor_id|id,\App\Models\Accounting,user_id|id,\App\Models\CommentReport,user_id|id,\App\Models\WebinarReport,user_id|id,\App\Models\NotificationStatus,user_id|id,\App\Models\NoticeboardStatus,user_id|id,\App\Models\Newsletter,user_id|id,\App\Models\RewardAccounting,user_id|id,\App\Models\CourseNoticeboardStatus,user_id|id,\App\Models\AbandonedCartRuleHistory,user_id|id,\App\Models\ForumTopicVisit,user_id|id,\App\Models\TimeSpentOnCourse,user_id
     * @mixin Api_IH_User_QB
     */
    class User extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $token
     * @property string|null $fcm_token
     * @property string $ip
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_UserFirebaseSessions_QB onWriteConnection()
     * @method _IH_UserFirebaseSessions_QB newQuery()
     * @method static _IH_UserFirebaseSessions_QB on(null|string $connection = null)
     * @method static _IH_UserFirebaseSessions_QB query()
     * @method static _IH_UserFirebaseSessions_QB with(array|string $relations)
     * @method _IH_UserFirebaseSessions_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserFirebaseSessions_C|UserFirebaseSessions[] all()
     * @ownLinks user_id,\App\User,id
     * @mixin _IH_UserFirebaseSessions_QB
     */
    class UserFirebaseSessions extends Model {}
    
    /**
     * @property int $id
     * @property int $teacher_id
     * @property int $creator_user_id
     * @property int $start_date
     * @property string $image_cover
     * @property string|null $video_demo
     * @property int $capacity
     * @property mixed $price
     * @property bool $support
     * @property bool $partner_instructor
     * @property bool $subscribe
     * @property string|null $message_for_reviewer
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property int $category_id
     * @property int $start_time
     * @property int $end_time
     * @property string $slug
     * @property int $duration
     * @property bool $downloadable
     * @property string $type
     * @property string $thumbnail
     * @property bool $private
     * @property int|null $points
     * @property string|null $timezone
     * @property string $video_demo_source
     * @property int|null $access_days Number of days to access the course
     * @property bool $forum
     * @property float|null $organization_price
     * @property bool $certificate
     * @property bool $enable_waitlist
     * @property int|null $sales_count_number
     * @property string|null $icon
     * @property bool $only_for_students
     * @property-read int $assignments_average_grade attribute
     * @property-read $assignments_status attribute
     * @property-read array|null $brief attribute
     * @property-read $comments_count attribute
     * @property-read $course_progress attribute
     * @property-read $course_progress_line attribute
     * @property-read $description attribute
     * @property-read $details attribute
     * @property-read bool $expired attribute
     * @property-read int $forums_messages_count attribute
     * @property-read bool $has_capacity attribute
     * @property-read void $label attribute
     * @property-read $monthly_sales attribute
     * @property-read $quiz_status attribute
     * @property-read $quizzes_average_grade attribute
     * @property-read $sales_amount attribute
     * @property-read $seo_description attribute
     * @property-read array $specification attribute
     * @property-read $students_count attribute
     * @property-read $students_ids attribute
     * @property-read array $students_roles attribute
     * @property-read $summary attribute
     * @property-read $title attribute
     * @property _IH_WebinarAssignment_C|ModelsWebinarAssignment[] $assignments
     * @property-read int $assignments_count
     * @method HasMany|_IH_WebinarAssignment_QB assignments()
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $badges
     * @property-read int $badges_count
     * @method HasMany|_IH_ProductBadgeContent_QB badges()
     * @property ModelsCategory $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property Models_IH_Certificate_C|ModelsCertificate[] $certificates
     * @property-read int $certificates_count
     * @method HasMany|Models_IH_Certificate_QB certificates()
     * @property _IH_WebinarChapter_C|ModelsWebinarChapter[] $chapters
     * @property-read int $chapters_count
     * @method HasMany|_IH_WebinarChapter_QB chapters()
     * @property _IH_Comment_C|ModelsComment[] $comments
     * @method HasMany|_IH_Comment_QB comments()
     * @property AppUser $creator
     * @method BelongsTo|_IH_User_QB creator()
     * @property ModelsContentDeleteRequest $deleteRequest
     * @method MorphToMany|_IH_ContentDeleteRequest_QB deleteRequest()
     * @property _IH_Faq_C|ModelsFaq[] $faqs
     * @property-read int $faqs_count
     * @method HasMany|_IH_Faq_QB faqs()
     * @property ModelsFeatureWebinar $feature
     * @method HasOne|Models_IH_FeatureWebinar_QB feature()
     * @property Models_IH_File_C|ModelsFile[] $files
     * @property-read int $files_count
     * @method HasMany|Models_IH_File_QB files()
     * @property _IH_WebinarFilterOption_C|WebinarFilterOption[] $filterOptions
     * @property-read int $filter_options_count
     * @method HasMany|_IH_WebinarFilterOption_QB filterOptions()
     * @property Models_IH_CourseForum_C|ModelsCourseForum[] $forums
     * @property-read int $forums_count
     * @method HasMany|Models_IH_CourseForum_QB forums()
     * @property _IH_WebinarAssignment_C|ModelsWebinarAssignment[] $getAllAssignmentsCount
     * @property-read int $get_all_assignments_count_count
     * @method HasMany|_IH_WebinarAssignment_QB getAllAssignmentsCount()
     * @property _IH_WebinarReview_C|ModelsWebinarReview[] $getRateCount
     * @property-read int $get_rate_count_count
     * @method HasMany|_IH_WebinarReview_QB getRateCount()
     * @property _IH_CourseNoticeboard_C|CourseNoticeboard[] $noticeboards
     * @property-read int $noticeboards_count
     * @method HasMany|_IH_CourseNoticeboard_QB noticeboards()
     * @property _IH_WebinarAssignment_C|ModelsWebinarAssignment[] $pendingAssignments
     * @property-read int $pending_assignments_count
     * @method HasMany|_IH_WebinarAssignment_QB pendingAssignments()
     * @property Models_IH_Quiz_C|ModelsQuiz[] $pendingQuizzes
     * @property-read int $pending_quizzes_count
     * @method HasMany|_IH_Quiz_QB pendingQuizzes()
     * @property Models_IH_Prerequisite_C|ModelsPrerequisite[] $prerequisites
     * @property-read int $prerequisites_count
     * @method HasMany|Models_IH_Prerequisite_QB prerequisites()
     * @property Models_IH_ProductBadgeContent_C|ModelsProductBadgeContent[] $productBadgeContents
     * @property-read int $product_badge_contents_count
     * @method MorphToMany|Models_IH_ProductBadgeContent_QB productBadgeContents()
     * @property _IH_Purchase_C|Purchase[] $purchases
     * @property-read int $purchases_count
     * @method HasMany|_IH_Purchase_QB purchases()
     * @property Models_IH_Quiz_C|ModelsQuiz[] $quizzes
     * @property-read int $quizzes_count
     * @method HasMany|_IH_Quiz_QB quizzes()
     * @property _IH_RelatedCourse_C|RelatedCourse[] $relatedCourses
     * @property-read int $related_courses_count
     * @method MorphToMany|_IH_RelatedCourse_QB relatedCourses()
     * @property _IH_WebinarReview_C|ModelsWebinarReview[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_WebinarReview_QB reviews()
     * @property _IH_Sale_C|ModelsSale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @property Models_IH_Session_C|ModelsSession[] $sessions
     * @property-read int $sessions_count
     * @method HasMany|_IH_Session_QB sessions()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method HasMany|_IH_Tag_QB tags()
     * @property AppUser $teacher
     * @method BelongsTo|_IH_User_QB teacher()
     * @property Models_IH_TextLesson_C|ModelsTextLesson[] $textLessons
     * @property-read int $text_lessons_count
     * @method HasMany|Models_IH_TextLesson_QB textLessons()
     * @property _IH_Ticket_C|ModelsTicket[] $tickets
     * @property-read int $tickets_count
     * @method HasMany|_IH_Ticket_QB tickets()
     * @property _IH_TimeSpentOnCourse_C|TimeSpentOnCourse[] $timeSpents
     * @property-read int $time_spents_count
     * @method HasMany|_IH_TimeSpentOnCourse_QB timeSpents()
     * @property _IH_VisitLog_C|VisitLog[] $visits
     * @property-read int $visits_count
     * @method MorphToMany|_IH_VisitLog_QB visits()
     * @property _IH_Waitlist_C|Waitlist[] $waitlists
     * @property-read int $waitlists_count
     * @method HasMany|_IH_Waitlist_QB waitlists()
     * @property _IH_WebinarExtraDescription_C|WebinarExtraDescription[] $webinarExtraDescription
     * @property-read int $webinar_extra_description_count
     * @method HasMany|_IH_WebinarExtraDescription_QB webinarExtraDescription()
     * @property _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] $webinarPartnerTeacher
     * @property-read int $webinar_partner_teacher_count
     * @method HasMany|_IH_WebinarPartnerTeacher_QB webinarPartnerTeacher()
     * @method static Api_IH_Webinar_QB onWriteConnection()
     * @method Api_IH_Webinar_QB newQuery()
     * @method static Api_IH_Webinar_QB on(null|string $connection = null)
     * @method static Api_IH_Webinar_QB query()
     * @method static Api_IH_Webinar_QB with(array|string $relations)
     * @method Api_IH_Webinar_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_Webinar_C|Webinar[] all()
     * @ownLinks teacher_id,\App\User,id|creator_user_id,\App\User,id|category_id,\App\Models\Category,id|creator_id,\App\User,id
     * @foreignLinks id,\App\Models\WebinarPartnerTeacher,webinar_id|id,\App\Models\WebinarFilterOption,webinar_id|id,\App\Models\Prerequisite,webinar_id|id,\App\Models\Prerequisite,prerequisite_id|id,\App\Models\Purchase,webinar_id|id,\App\Models\Favorite,webinar_id|id,\App\Models\Comment,webinar_id|id,\App\Models\Faq,webinar_id|id,\App\Models\File,webinar_id|id,\App\Models\Tag,webinar_id|id,\App\Models\Ticket,webinar_id|id,\App\Models\Session,webinar_id|id,\App\Models\Quiz,webinar_id|id,\App\Models\WebinarReview,webinar_id|id,\App\Models\Cart,webinar_id|id,\App\Models\OrderItem,webinar_id|id,\App\Models\Sale,webinar_id|id,\App\Models\FeatureWebinar,webinar_id|id,\App\Models\Support,webinar_id|id,\App\Models\TextLesson,webinar_id|id,\App\Models\SubscribeUse,webinar_id|id,\App\Models\WebinarReport,webinar_id|id,\App\Models\Notification,webinar_id|id,\App\Models\SpecialOffer,webinar_id|id,\App\Models\WebinarChapter,webinar_id|id,\App\Models\Translation\WebinarTranslation,webinar_id|id,\App\Models\DiscountCourse,course_id|id,\App\Models\WebinarAssignment,webinar_id|id,\App\Models\BundleWebinar,webinar_id|id,\App\Models\CourseNoticeboard,webinar_id|id,\App\Models\CourseForum,webinar_id|id,\App\Models\Certificate,webinar_id|id,\App\Models\Noticeboard,webinar_id|id,\App\Models\WebinarExtraDescription,webinar_id|id,\App\Models\UpcomingCourse,webinar_id|id,\App\Models\InstallmentSpecificationItem,webinar_id|id,\App\Models\InstallmentOrder,webinar_id|id,\App\Models\CashbackRuleSpecificationItem,webinar_id|id,\App\Models\Waitlist,webinar_id|id,\App\Models\Gift,webinar_id|id,\App\Models\RelatedCourse,course_id|id,\App\Models\PurchaseNotificationRoleGroupContent,webinar_id|id,\App\Models\CoursePersonalNote,course_id|id,\App\Models\AbandonedCartRuleSpecificationItem,webinar_id|id,\App\Models\CourseLearningLastView,webinar_id|id,\App\Models\TimeSpentOnCourse,course_id|id,\App\Models\SubscribeSpecificationItem,course_id|id,\App\Models\Accounting,webinar_id|id,\App\Models\CommentReport,webinar_id
     * @mixin Api_IH_Webinar_QB
     */
    class Webinar extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $webinar_id
     * @property int $chapter_id
     * @property int|null $grade
     * @property int|null $pass_grade
     * @property int|null $deadline
     * @property int|null $attempts
     * @property bool $check_previous_parts
     * @property int|null $access_after_day
     * @property string $status
     * @property int $created_at
     * @property-read string $assignment_status attribute
     * @property-read null $avg_grade attribute
     * @property-read null $deadline_time attribute
     * @property-read $description attribute
     * @property-read $failed_count attribute
     * @property-read null $first_submission attribute
     * @property-read null $last_submission attribute
     * @property-read null $min_grade attribute
     * @property-read $passed_count attribute
     * @property-read $pending_count attribute
     * @property-read $submissions_count attribute
     * @property-read $title attribute
     * @property-read int $used_attempts_count attribute
     * @property ModelsWebinarAssignmentHistory $assignmentHistory
     * @method HasOne|_IH_WebinarAssignmentHistory_QB assignmentHistory()
     * @property _IH_WebinarAssignmentAttachment_C|ModelsWebinarAssignmentAttachment[] $attachments
     * @property-read int $attachments_count
     * @method HasMany|_IH_WebinarAssignmentAttachment_QB attachments()
     * @property ModelsWebinarChapter $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property _IH_WebinarAssignmentHistory_C|ModelsWebinarAssignmentHistory[] $getFailedCountAttribute
     * @property-read int $get_failed_count_attribute_count
     * @method HasMany|_IH_WebinarAssignmentHistory_QB getFailedCountAttribute()
     * @property _IH_WebinarAssignmentHistory_C|ModelsWebinarAssignmentHistory[] $getPassedCountAttribute
     * @property-read int $get_passed_count_attribute_count
     * @method HasMany|_IH_WebinarAssignmentHistory_QB getPassedCountAttribute()
     * @property _IH_WebinarAssignmentHistory_C|ModelsWebinarAssignmentHistory[] $getPendingCountAttribute
     * @property-read int $get_pending_count_attribute_count
     * @method HasMany|_IH_WebinarAssignmentHistory_QB getPendingCountAttribute()
     * @property _IH_WebinarAssignmentHistory_C|ModelsWebinarAssignmentHistory[] $instructorAssignmentHistories
     * @property-read int $instructor_assignment_histories_count
     * @method HasMany|_IH_WebinarAssignmentHistory_QB instructorAssignmentHistories()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property ModelsWebinarAssignmentHistory $userAssignmentHistory
     * @method HasOne|_IH_WebinarAssignmentHistory_QB userAssignmentHistory()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_WebinarAssignment_QB onWriteConnection()
     * @method Api_IH_WebinarAssignment_QB newQuery()
     * @method static Api_IH_WebinarAssignment_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarAssignment_QB query()
     * @method static Api_IH_WebinarAssignment_QB with(array|string $relations)
     * @method Api_IH_WebinarAssignment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarAssignment_C|WebinarAssignment[] all()
     * @ownLinks creator_id,\App\User,id|webinar_id,\App\Models\Webinar,id|chapter_id,\App\Models\WebinarChapter,id
     * @foreignLinks id,\App\Models\Translation\WebinarAssignmentTranslation,webinar_assignment_id|id,\App\Models\WebinarAssignmentAttachment,assignment_id|id,\App\Models\WebinarAssignmentHistory,assignment_id
     * @mixin Api_IH_WebinarAssignment_QB
     */
    class WebinarAssignment extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $assignment_id
     * @property string $title
     * @property string $attach
     * @method static Api_IH_WebinarAssignmentAttachment_QB onWriteConnection()
     * @method Api_IH_WebinarAssignmentAttachment_QB newQuery()
     * @method static Api_IH_WebinarAssignmentAttachment_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarAssignmentAttachment_QB query()
     * @method static Api_IH_WebinarAssignmentAttachment_QB with(array|string $relations)
     * @method Api_IH_WebinarAssignmentAttachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] all()
     * @ownLinks assignment_id,\App\Models\WebinarAssignment,id
     * @mixin Api_IH_WebinarAssignmentAttachment_QB
     */
    class WebinarAssignmentAttachment extends Model {}
    
    /**
     * @property int $id
     * @property int $instructor_id
     * @property int $student_id
     * @property int $assignment_id
     * @property int|null $grade
     * @property string $status
     * @property int $created_at
     * @property-read null $first_submission attribute
     * @property-read null $last_submission attribute
     * @property-read int $used_attempts_count attribute
     * @property ModelsWebinarAssignment $assignment
     * @method BelongsTo|_IH_WebinarAssignment_QB assignment()
     * @property AppUser $instructor
     * @method BelongsTo|_IH_User_QB instructor()
     * @property _IH_WebinarAssignmentHistoryMessage_C|ModelsWebinarAssignmentHistoryMessage[] $messages
     * @property-read int $messages_count
     * @method HasMany|_IH_WebinarAssignmentHistoryMessage_QB messages()
     * @property AppUser $student
     * @method BelongsTo|_IH_User_QB student()
     * @method static Api_IH_WebinarAssignmentHistory_QB onWriteConnection()
     * @method Api_IH_WebinarAssignmentHistory_QB newQuery()
     * @method static Api_IH_WebinarAssignmentHistory_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarAssignmentHistory_QB query()
     * @method static Api_IH_WebinarAssignmentHistory_QB with(array|string $relations)
     * @method Api_IH_WebinarAssignmentHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] all()
     * @ownLinks instructor_id,\App\User,id|student_id,\App\User,id|assignment_id,\App\Models\WebinarAssignment,id
     * @foreignLinks id,\App\Models\WebinarAssignmentHistoryMessage,assignment_history_id
     * @mixin Api_IH_WebinarAssignmentHistory_QB
     */
    class WebinarAssignmentHistory extends Model {}
    
    /**
     * @property int $id
     * @property int $assignment_history_id
     * @property int $sender_id
     * @property string $message
     * @property string|null $file_title
     * @property string|null $file_path
     * @property int $created_at
     * @property AppUser $sender
     * @method BelongsTo|_IH_User_QB sender()
     * @method static Api_IH_WebinarAssignmentHistoryMessage_QB onWriteConnection()
     * @method Api_IH_WebinarAssignmentHistoryMessage_QB newQuery()
     * @method static Api_IH_WebinarAssignmentHistoryMessage_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarAssignmentHistoryMessage_QB query()
     * @method static Api_IH_WebinarAssignmentHistoryMessage_QB with(array|string $relations)
     * @method Api_IH_WebinarAssignmentHistoryMessage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] all()
     * @ownLinks assignment_history_id,\App\Models\WebinarAssignmentHistory,id
     * @mixin Api_IH_WebinarAssignmentHistoryMessage_QB
     */
    class WebinarAssignmentHistoryMessage extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $webinar_id
     * @property string $type
     * @property int|null $order
     * @property string $status
     * @property int $created_at
     * @property bool $check_all_contents_pass
     * @property-read null $chapter_content attribute
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property _IH_WebinarAssignment_C|ModelsWebinarAssignment[] $assignments
     * @property-read int $assignments_count
     * @method HasMany|_IH_WebinarAssignment_QB assignments()
     * @property _IH_WebinarChapterItem_C|ModelsWebinarChapterItem[] $chapterItems
     * @property-read int $chapter_items_count
     * @method HasMany|_IH_WebinarChapterItem_QB chapterItems()
     * @property Models_IH_File_C|ModelsFile[] $files
     * @property-read int $files_count
     * @method HasMany|Models_IH_File_QB files()
     * @property Models_IH_Quiz_C|ModelsQuiz[] $quizzes
     * @property-read int $quizzes_count
     * @method HasMany|_IH_Quiz_QB quizzes()
     * @property Models_IH_Session_C|ModelsSession[] $sessions
     * @property-read int $sessions_count
     * @method HasMany|_IH_Session_QB sessions()
     * @property Models_IH_TextLesson_C|ModelsTextLesson[] $textLessons
     * @property-read int $text_lessons_count
     * @method HasMany|Models_IH_TextLesson_QB textLessons()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_WebinarChapter_QB onWriteConnection()
     * @method Api_IH_WebinarChapter_QB newQuery()
     * @method static Api_IH_WebinarChapter_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarChapter_QB query()
     * @method static Api_IH_WebinarChapter_QB with(array|string $relations)
     * @method Api_IH_WebinarChapter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarChapter_C|WebinarChapter[] all()
     * @ownLinks user_id,\App\User,id|webinar_id,\App\Models\Webinar,id
     * @foreignLinks id,\App\Models\File,chapter_id|id,\App\Models\TextLesson,chapter_id|id,\App\Models\Session,chapter_id|id,\App\Models\Quiz,chapter_id|id,\App\Models\Translation\WebinarChapterTranslation,webinar_chapter_id|id,\App\Models\WebinarChapterItem,chapter_id|id,\App\Models\WebinarAssignment,chapter_id
     * @mixin Api_IH_WebinarChapter_QB
     */
    class WebinarChapter extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $chapter_id
     * @property int $item_id
     * @property string $type
     * @property int|null $order
     * @property int $created_at
     * @property ModelsWebinarAssignment $assignment
     * @method BelongsTo|_IH_WebinarAssignment_QB assignment()
     * @property ModelsWebinarChapter $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property ModelsFile $file
     * @method BelongsTo|Models_IH_File_QB file()
     * @property ModelsQuiz $quiz
     * @method BelongsTo|_IH_Quiz_QB quiz()
     * @property ModelsSession $session
     * @method BelongsTo|_IH_Session_QB session()
     * @property ModelsTextLesson $textLesson
     * @method BelongsTo|Models_IH_TextLesson_QB textLesson()
     * @method static Api_IH_WebinarChapterItem_QB onWriteConnection()
     * @method Api_IH_WebinarChapterItem_QB newQuery()
     * @method static Api_IH_WebinarChapterItem_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarChapterItem_QB query()
     * @method static Api_IH_WebinarChapterItem_QB with(array|string $relations)
     * @method Api_IH_WebinarChapterItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarChapterItem_C|WebinarChapterItem[] all()
     * @ownLinks user_id,\App\User,id|chapter_id,\App\Models\WebinarChapter,id
     * @mixin Api_IH_WebinarChapterItem_QB
     */
    class WebinarChapterItem extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $webinar_id
     * @property string $reason
     * @property string $message
     * @property int $created_at
     * @property-read array $details attribute
     * @property User $user
     * @method BelongsTo|Api_IH_User_QB user()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static _IH_WebinarReport_QB onWriteConnection()
     * @method _IH_WebinarReport_QB newQuery()
     * @method static _IH_WebinarReport_QB on(null|string $connection = null)
     * @method static _IH_WebinarReport_QB query()
     * @method static _IH_WebinarReport_QB with(array|string $relations)
     * @method _IH_WebinarReport_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarReport_C|WebinarReport[] all()
     * @ownLinks webinar_id,\App\Models\Webinar,id|user_id,\App\User,id
     * @mixin _IH_WebinarReport_QB
     */
    class WebinarReport extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $creator_user_id
     * @property int $content_quality
     * @property int $instructor_skills
     * @property int $purchase_worth
     * @property int $support_quality
     * @property int $rates
     * @property string|null $description
     * @property int $created_at
     * @property string $status
     * @property int|null $bundle_id
     * @property-read bool|null $auth attribute
     * @property-read array $details attribute
     * @property ModelsBundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property _IH_Comment_C|ModelsComment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property AppUser $creator
     * @method BelongsTo|_IH_User_QB creator()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_WebinarReview_QB onWriteConnection()
     * @method Api_IH_WebinarReview_QB newQuery()
     * @method static Api_IH_WebinarReview_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarReview_QB query()
     * @method static Api_IH_WebinarReview_QB with(array|string $relations)
     * @method Api_IH_WebinarReview_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarReview_C|WebinarReview[] all()
     * @ownLinks creator_user_id,\App\User,id|webinar_id,\App\Models\Webinar,id|creator_id,\App\User,id|bundle_id,\App\Models\Bundle,id
     * @foreignLinks id,\App\Models\Comment,review_id
     * @mixin Api_IH_WebinarReview_QB
     */
    class WebinarReview extends Model {}
}