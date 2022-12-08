<?php
// This file was auto-generated from sdk-root/src/data/budgets/2016-10-20/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-10-20', 'endpointPrefix' => 'budgets', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'AWSBudgets', 'serviceFullName' => 'AWS Budgets', 'serviceId' => 'Budgets', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSBudgetServiceGateway', 'uid' => 'budgets-2016-10-20', ], 'operations' => [ 'CreateBudget' => [ 'name' => 'CreateBudget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateBudgetRequest', ], 'output' => [ 'shape' => 'CreateBudgetResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'CreationLimitExceededException', ], [ 'shape' => 'DuplicateRecordException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'CreateBudgetAction' => [ 'name' => 'CreateBudgetAction', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateBudgetActionRequest', ], 'output' => [ 'shape' => 'CreateBudgetActionResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'CreationLimitExceededException', ], [ 'shape' => 'DuplicateRecordException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'CreateNotification' => [ 'name' => 'CreateNotification', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateNotificationRequest', ], 'output' => [ 'shape' => 'CreateNotificationResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'CreationLimitExceededException', ], [ 'shape' => 'DuplicateRecordException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'CreateSubscriber' => [ 'name' => 'CreateSubscriber', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateSubscriberRequest', ], 'output' => [ 'shape' => 'CreateSubscriberResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'CreationLimitExceededException', ], [ 'shape' => 'DuplicateRecordException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DeleteBudget' => [ 'name' => 'DeleteBudget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteBudgetRequest', ], 'output' => [ 'shape' => 'DeleteBudgetResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DeleteBudgetAction' => [ 'name' => 'DeleteBudgetAction', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteBudgetActionRequest', ], 'output' => [ 'shape' => 'DeleteBudgetActionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceLockedException', ], ], ], 'DeleteNotification' => [ 'name' => 'DeleteNotification', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteNotificationRequest', ], 'output' => [ 'shape' => 'DeleteNotificationResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DeleteSubscriber' => [ 'name' => 'DeleteSubscriber', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteSubscriberRequest', ], 'output' => [ 'shape' => 'DeleteSubscriberResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeBudget' => [ 'name' => 'DescribeBudget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBudgetRequest', ], 'output' => [ 'shape' => 'DescribeBudgetResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeBudgetAction' => [ 'name' => 'DescribeBudgetAction', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBudgetActionRequest', ], 'output' => [ 'shape' => 'DescribeBudgetActionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeBudgetActionHistories' => [ 'name' => 'DescribeBudgetActionHistories', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBudgetActionHistoriesRequest', ], 'output' => [ 'shape' => 'DescribeBudgetActionHistoriesResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DescribeBudgetActionsForAccount' => [ 'name' => 'DescribeBudgetActionsForAccount', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBudgetActionsForAccountRequest', ], 'output' => [ 'shape' => 'DescribeBudgetActionsForAccountResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DescribeBudgetActionsForBudget' => [ 'name' => 'DescribeBudgetActionsForBudget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBudgetActionsForBudgetRequest', ], 'output' => [ 'shape' => 'DescribeBudgetActionsForBudgetResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DescribeBudgetNotificationsForAccount' => [ 'name' => 'DescribeBudgetNotificationsForAccount', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBudgetNotificationsForAccountRequest', ], 'output' => [ 'shape' => 'DescribeBudgetNotificationsForAccountResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ExpiredNextTokenException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeBudgetPerformanceHistory' => [ 'name' => 'DescribeBudgetPerformanceHistory', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBudgetPerformanceHistoryRequest', ], 'output' => [ 'shape' => 'DescribeBudgetPerformanceHistoryResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ExpiredNextTokenException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeBudgets' => [ 'name' => 'DescribeBudgets', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBudgetsRequest', ], 'output' => [ 'shape' => 'DescribeBudgetsResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ExpiredNextTokenException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeNotificationsForBudget' => [ 'name' => 'DescribeNotificationsForBudget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeNotificationsForBudgetRequest', ], 'output' => [ 'shape' => 'DescribeNotificationsForBudgetResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ExpiredNextTokenException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DescribeSubscribersForNotification' => [ 'name' => 'DescribeSubscribersForNotification', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeSubscribersForNotificationRequest', ], 'output' => [ 'shape' => 'DescribeSubscribersForNotificationResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ExpiredNextTokenException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ExecuteBudgetAction' => [ 'name' => 'ExecuteBudgetAction', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ExecuteBudgetActionRequest', ], 'output' => [ 'shape' => 'ExecuteBudgetActionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceLockedException', ], ], ], 'UpdateBudget' => [ 'name' => 'UpdateBudget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateBudgetRequest', ], 'output' => [ 'shape' => 'UpdateBudgetResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'UpdateBudgetAction' => [ 'name' => 'UpdateBudgetAction', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateBudgetActionRequest', ], 'output' => [ 'shape' => 'UpdateBudgetActionResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceLockedException', ], ], ], 'UpdateNotification' => [ 'name' => 'UpdateNotification', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateNotificationRequest', ], 'output' => [ 'shape' => 'UpdateNotificationResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'DuplicateRecordException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'UpdateSubscriber' => [ 'name' => 'UpdateSubscriber', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateSubscriberRequest', ], 'output' => [ 'shape' => 'UpdateSubscriberResponse', ], 'errors' => [ [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'DuplicateRecordException', ], [ 'shape' => 'AccessDeniedException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'AccountId' => [ 'type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '\\d{12}', ], 'Action' => [ 'type' => 'structure', 'required' => [ 'ActionId', 'BudgetName', 'NotificationType', 'ActionType', 'ActionThreshold', 'Definition', 'ExecutionRoleArn', 'ApprovalModel', 'Status', 'Subscribers', ], 'members' => [ 'ActionId' => [ 'shape' => 'ActionId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'NotificationType' => [ 'shape' => 'NotificationType', ], 'ActionType' => [ 'shape' => 'ActionType', ], 'ActionThreshold' => [ 'shape' => 'ActionThreshold', ], 'Definition' => [ 'shape' => 'Definition', ], 'ExecutionRoleArn' => [ 'shape' => 'RoleArn', ], 'ApprovalModel' => [ 'shape' => 'ApprovalModel', ], 'Status' => [ 'shape' => 'ActionStatus', ], 'Subscribers' => [ 'shape' => 'Subscribers', ], ], ], 'ActionHistories' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActionHistory', ], 'max' => 100, 'min' => 0, ], 'ActionHistory' => [ 'type' => 'structure', 'required' => [ 'Timestamp', 'Status', 'EventType', 'ActionHistoryDetails', ], 'members' => [ 'Timestamp' => [ 'shape' => 'GenericTimestamp', ], 'Status' => [ 'shape' => 'ActionStatus', ], 'EventType' => [ 'shape' => 'EventType', ], 'ActionHistoryDetails' => [ 'shape' => 'ActionHistoryDetails', ], ], ], 'ActionHistoryDetails' => [ 'type' => 'structure', 'required' => [ 'Message', 'Action', ], 'members' => [ 'Message' => [ 'shape' => 'GenericString', ], 'Action' => [ 'shape' => 'Action', ], ], ], 'ActionId' => [ 'type' => 'string', 'max' => 36, 'min' => 36, 'pattern' => '^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$', ], 'ActionStatus' => [ 'type' => 'string', 'enum' => [ 'STANDBY', 'PENDING', 'EXECUTION_IN_PROGRESS', 'EXECUTION_SUCCESS', 'EXECUTION_FAILURE', 'REVERSE_IN_PROGRESS', 'REVERSE_SUCCESS', 'REVERSE_FAILURE', 'RESET_IN_PROGRESS', 'RESET_FAILURE', ], ], 'ActionSubType' => [ 'type' => 'string', 'enum' => [ 'STOP_EC2_INSTANCES', 'STOP_RDS_INSTANCES', ], ], 'ActionThreshold' => [ 'type' => 'structure', 'required' => [ 'ActionThresholdValue', 'ActionThresholdType', ], 'members' => [ 'ActionThresholdValue' => [ 'shape' => 'NotificationThreshold', ], 'ActionThresholdType' => [ 'shape' => 'ThresholdType', ], ], ], 'ActionType' => [ 'type' => 'string', 'enum' => [ 'APPLY_IAM_POLICY', 'APPLY_SCP_POLICY', 'RUN_SSM_DOCUMENTS', ], ], 'Actions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Action', ], 'max' => 100, 'min' => 0, ], 'AdjustmentPeriod' => [ 'type' => 'integer', 'box' => true, 'max' => 60, 'min' => 1, ], 'ApprovalModel' => [ 'type' => 'string', 'enum' => [ 'AUTOMATIC', 'MANUAL', ], ], 'AutoAdjustData' => [ 'type' => 'structure', 'required' => [ 'AutoAdjustType', ], 'members' => [ 'AutoAdjustType' => [ 'shape' => 'AutoAdjustType', ], 'HistoricalOptions' => [ 'shape' => 'HistoricalOptions', ], 'LastAutoAdjustTime' => [ 'shape' => 'GenericTimestamp', ], ], ], 'AutoAdjustType' => [ 'type' => 'string', 'enum' => [ 'HISTORICAL', 'FORECAST', ], ], 'Budget' => [ 'type' => 'structure', 'required' => [ 'BudgetName', 'TimeUnit', 'BudgetType', ], 'members' => [ 'BudgetName' => [ 'shape' => 'BudgetName', ], 'BudgetLimit' => [ 'shape' => 'Spend', ], 'PlannedBudgetLimits' => [ 'shape' => 'PlannedBudgetLimits', ], 'CostFilters' => [ 'shape' => 'CostFilters', ], 'CostTypes' => [ 'shape' => 'CostTypes', ], 'TimeUnit' => [ 'shape' => 'TimeUnit', ], 'TimePeriod' => [ 'shape' => 'TimePeriod', ], 'CalculatedSpend' => [ 'shape' => 'CalculatedSpend', ], 'BudgetType' => [ 'shape' => 'BudgetType', ], 'LastUpdatedTime' => [ 'shape' => 'GenericTimestamp', ], 'AutoAdjustData' => [ 'shape' => 'AutoAdjustData', ], ], ], 'BudgetName' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '[^:\\\\]+', ], 'BudgetNotificationsForAccount' => [ 'type' => 'structure', 'members' => [ 'Notifications' => [ 'shape' => 'Notifications', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], ], ], 'BudgetNotificationsForAccountList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BudgetNotificationsForAccount', ], 'max' => 50, ], 'BudgetPerformanceHistory' => [ 'type' => 'structure', 'members' => [ 'BudgetName' => [ 'shape' => 'BudgetName', ], 'BudgetType' => [ 'shape' => 'BudgetType', ], 'CostFilters' => [ 'shape' => 'CostFilters', ], 'CostTypes' => [ 'shape' => 'CostTypes', ], 'TimeUnit' => [ 'shape' => 'TimeUnit', ], 'BudgetedAndActualAmountsList' => [ 'shape' => 'BudgetedAndActualAmountsList', ], ], ], 'BudgetType' => [ 'type' => 'string', 'enum' => [ 'USAGE', 'COST', 'RI_UTILIZATION', 'RI_COVERAGE', 'SAVINGS_PLANS_UTILIZATION', 'SAVINGS_PLANS_COVERAGE', ], ], 'BudgetedAndActualAmounts' => [ 'type' => 'structure', 'members' => [ 'BudgetedAmount' => [ 'shape' => 'Spend', ], 'ActualAmount' => [ 'shape' => 'Spend', ], 'TimePeriod' => [ 'shape' => 'TimePeriod', ], ], ], 'BudgetedAndActualAmountsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'BudgetedAndActualAmounts', ], ], 'Budgets' => [ 'type' => 'list', 'member' => [ 'shape' => 'Budget', ], ], 'CalculatedSpend' => [ 'type' => 'structure', 'required' => [ 'ActualSpend', ], 'members' => [ 'ActualSpend' => [ 'shape' => 'Spend', ], 'ForecastedSpend' => [ 'shape' => 'Spend', ], ], ], 'ComparisonOperator' => [ 'type' => 'string', 'enum' => [ 'GREATER_THAN', 'LESS_THAN', 'EQUAL_TO', ], ], 'CostFilters' => [ 'type' => 'map', 'key' => [ 'shape' => 'GenericString', ], 'value' => [ 'shape' => 'DimensionValues', ], ], 'CostTypes' => [ 'type' => 'structure', 'members' => [ 'IncludeTax' => [ 'shape' => 'NullableBoolean', ], 'IncludeSubscription' => [ 'shape' => 'NullableBoolean', ], 'UseBlended' => [ 'shape' => 'NullableBoolean', ], 'IncludeRefund' => [ 'shape' => 'NullableBoolean', ], 'IncludeCredit' => [ 'shape' => 'NullableBoolean', ], 'IncludeUpfront' => [ 'shape' => 'NullableBoolean', ], 'IncludeRecurring' => [ 'shape' => 'NullableBoolean', ], 'IncludeOtherSubscription' => [ 'shape' => 'NullableBoolean', ], 'IncludeSupport' => [ 'shape' => 'NullableBoolean', ], 'IncludeDiscount' => [ 'shape' => 'NullableBoolean', ], 'UseAmortized' => [ 'shape' => 'NullableBoolean', ], ], ], 'CreateBudgetActionRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'NotificationType', 'ActionType', 'ActionThreshold', 'Definition', 'ExecutionRoleArn', 'ApprovalModel', 'Subscribers', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'NotificationType' => [ 'shape' => 'NotificationType', ], 'ActionType' => [ 'shape' => 'ActionType', ], 'ActionThreshold' => [ 'shape' => 'ActionThreshold', ], 'Definition' => [ 'shape' => 'Definition', ], 'ExecutionRoleArn' => [ 'shape' => 'RoleArn', ], 'ApprovalModel' => [ 'shape' => 'ApprovalModel', ], 'Subscribers' => [ 'shape' => 'Subscribers', ], ], ], 'CreateBudgetActionResponse' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'ActionId', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'ActionId' => [ 'shape' => 'ActionId', ], ], ], 'CreateBudgetRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'Budget', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'Budget' => [ 'shape' => 'Budget', ], 'NotificationsWithSubscribers' => [ 'shape' => 'NotificationWithSubscribersList', ], ], ], 'CreateBudgetResponse' => [ 'type' => 'structure', 'members' => [], ], 'CreateNotificationRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'Notification', 'Subscribers', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'Notification' => [ 'shape' => 'Notification', ], 'Subscribers' => [ 'shape' => 'Subscribers', ], ], ], 'CreateNotificationResponse' => [ 'type' => 'structure', 'members' => [], ], 'CreateSubscriberRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'Notification', 'Subscriber', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'Notification' => [ 'shape' => 'Notification', ], 'Subscriber' => [ 'shape' => 'Subscriber', ], ], ], 'CreateSubscriberResponse' => [ 'type' => 'structure', 'members' => [], ], 'CreationLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'Definition' => [ 'type' => 'structure', 'members' => [ 'IamActionDefinition' => [ 'shape' => 'IamActionDefinition', ], 'ScpActionDefinition' => [ 'shape' => 'ScpActionDefinition', ], 'SsmActionDefinition' => [ 'shape' => 'SsmActionDefinition', ], ], ], 'DeleteBudgetActionRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'ActionId', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'ActionId' => [ 'shape' => 'ActionId', ], ], ], 'DeleteBudgetActionResponse' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'Action', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'Action' => [ 'shape' => 'Action', ], ], ], 'DeleteBudgetRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], ], ], 'DeleteBudgetResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteNotificationRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'Notification', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'Notification' => [ 'shape' => 'Notification', ], ], ], 'DeleteNotificationResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteSubscriberRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'Notification', 'Subscriber', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'Notification' => [ 'shape' => 'Notification', ], 'Subscriber' => [ 'shape' => 'Subscriber', ], ], ], 'DeleteSubscriberResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeBudgetActionHistoriesRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'ActionId', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'ActionId' => [ 'shape' => 'ActionId', ], 'TimePeriod' => [ 'shape' => 'TimePeriod', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetActionHistoriesResponse' => [ 'type' => 'structure', 'required' => [ 'ActionHistories', ], 'members' => [ 'ActionHistories' => [ 'shape' => 'ActionHistories', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetActionRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'ActionId', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'ActionId' => [ 'shape' => 'ActionId', ], ], ], 'DescribeBudgetActionResponse' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'Action', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'Action' => [ 'shape' => 'Action', ], ], ], 'DescribeBudgetActionsForAccountRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetActionsForAccountResponse' => [ 'type' => 'structure', 'required' => [ 'Actions', ], 'members' => [ 'Actions' => [ 'shape' => 'Actions', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetActionsForBudgetRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetActionsForBudgetResponse' => [ 'type' => 'structure', 'required' => [ 'Actions', ], 'members' => [ 'Actions' => [ 'shape' => 'Actions', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetNotificationsForAccountRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'MaxResults' => [ 'shape' => 'MaxResultsBudgetNotifications', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetNotificationsForAccountResponse' => [ 'type' => 'structure', 'members' => [ 'BudgetNotificationsForAccount' => [ 'shape' => 'BudgetNotificationsForAccountList', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetPerformanceHistoryRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'TimePeriod' => [ 'shape' => 'TimePeriod', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetPerformanceHistoryResponse' => [ 'type' => 'structure', 'members' => [ 'BudgetPerformanceHistory' => [ 'shape' => 'BudgetPerformanceHistory', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], ], ], 'DescribeBudgetResponse' => [ 'type' => 'structure', 'members' => [ 'Budget' => [ 'shape' => 'Budget', ], ], ], 'DescribeBudgetsRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeBudgetsResponse' => [ 'type' => 'structure', 'members' => [ 'Budgets' => [ 'shape' => 'Budgets', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeNotificationsForBudgetRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeNotificationsForBudgetResponse' => [ 'type' => 'structure', 'members' => [ 'Notifications' => [ 'shape' => 'Notifications', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeSubscribersForNotificationRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'Notification', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'Notification' => [ 'shape' => 'Notification', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DescribeSubscribersForNotificationResponse' => [ 'type' => 'structure', 'members' => [ 'Subscribers' => [ 'shape' => 'Subscribers', ], 'NextToken' => [ 'shape' => 'GenericString', ], ], ], 'DimensionValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'GenericString', ], ], 'DuplicateRecordException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'EventType' => [ 'type' => 'string', 'enum' => [ 'SYSTEM', 'CREATE_ACTION', 'DELETE_ACTION', 'UPDATE_ACTION', 'EXECUTE_ACTION', ], ], 'ExecuteBudgetActionRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'ActionId', 'ExecutionType', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'ActionId' => [ 'shape' => 'ActionId', ], 'ExecutionType' => [ 'shape' => 'ExecutionType', ], ], ], 'ExecuteBudgetActionResponse' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'ActionId', 'ExecutionType', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'ActionId' => [ 'shape' => 'ActionId', ], 'ExecutionType' => [ 'shape' => 'ExecutionType', ], ], ], 'ExecutionType' => [ 'type' => 'string', 'enum' => [ 'APPROVE_BUDGET_ACTION', 'RETRY_BUDGET_ACTION', 'REVERSE_BUDGET_ACTION', 'RESET_BUDGET_ACTION', ], ], 'ExpiredNextTokenException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'GenericString' => [ 'type' => 'string', 'max' => 2147483647, 'min' => 0, 'pattern' => '.*', ], 'GenericTimestamp' => [ 'type' => 'timestamp', ], 'Group' => [ 'type' => 'string', 'max' => 640, 'min' => 1, 'pattern' => '^([\\u0021-\\u007F]+\\u002F)?[\\w+=,.@-]+$', ], 'Groups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], 'max' => 100, 'min' => 1, ], 'HistoricalOptions' => [ 'type' => 'structure', 'required' => [ 'BudgetAdjustmentPeriod', ], 'members' => [ 'BudgetAdjustmentPeriod' => [ 'shape' => 'AdjustmentPeriod', ], 'LookBackAvailablePeriods' => [ 'shape' => 'AdjustmentPeriod', ], ], ], 'IamActionDefinition' => [ 'type' => 'structure', 'required' => [ 'PolicyArn', ], 'members' => [ 'PolicyArn' => [ 'shape' => 'PolicyArn', ], 'Roles' => [ 'shape' => 'Roles', ], 'Groups' => [ 'shape' => 'Groups', ], 'Users' => [ 'shape' => 'Users', ], ], ], 'InstanceId' => [ 'type' => 'string', 'max' => 63, 'min' => 1, 'pattern' => '^i-(\\w{8}|\\w{17})$|^[a-zA-Z]([\\w-]{0,61}\\w)?$', ], 'InstanceIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceId', ], 'max' => 100, 'min' => 1, ], 'InternalErrorException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'MaxResultsBudgetNotifications' => [ 'type' => 'integer', 'box' => true, 'max' => 50, 'min' => 1, ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'Notification' => [ 'type' => 'structure', 'required' => [ 'NotificationType', 'ComparisonOperator', 'Threshold', ], 'members' => [ 'NotificationType' => [ 'shape' => 'NotificationType', ], 'ComparisonOperator' => [ 'shape' => 'ComparisonOperator', ], 'Threshold' => [ 'shape' => 'NotificationThreshold', ], 'ThresholdType' => [ 'shape' => 'ThresholdType', ], 'NotificationState' => [ 'shape' => 'NotificationState', ], ], ], 'NotificationState' => [ 'type' => 'string', 'enum' => [ 'OK', 'ALARM', ], ], 'NotificationThreshold' => [ 'type' => 'double', 'max' => 15000000000000, 'min' => 0, ], 'NotificationType' => [ 'type' => 'string', 'enum' => [ 'ACTUAL', 'FORECASTED', ], ], 'NotificationWithSubscribers' => [ 'type' => 'structure', 'required' => [ 'Notification', 'Subscribers', ], 'members' => [ 'Notification' => [ 'shape' => 'Notification', ], 'Subscribers' => [ 'shape' => 'Subscribers', ], ], ], 'NotificationWithSubscribersList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotificationWithSubscribers', ], 'max' => 10, ], 'Notifications' => [ 'type' => 'list', 'member' => [ 'shape' => 'Notification', ], ], 'NullableBoolean' => [ 'type' => 'boolean', 'box' => true, ], 'NumericValue' => [ 'type' => 'string', 'max' => 2147483647, 'min' => 1, 'pattern' => '([0-9]*\\.)?[0-9]+', ], 'PlannedBudgetLimits' => [ 'type' => 'map', 'key' => [ 'shape' => 'GenericString', ], 'value' => [ 'shape' => 'Spend', ], ], 'PolicyArn' => [ 'type' => 'string', 'max' => 684, 'min' => 25, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|us-iso-east-1|us-isob-east-1):iam::(\\d{12}|aws):policy(\\u002F[\\u0021-\\u007F]+\\u002F|\\u002F)[\\w+=,.@-]+$', ], 'PolicyId' => [ 'type' => 'string', 'max' => 130, 'min' => 10, 'pattern' => '^p-[0-9a-zA-Z_]{8,128}$', ], 'Region' => [ 'type' => 'string', 'max' => 20, 'min' => 9, 'pattern' => '^\\w{2}-\\w+(-\\w+)?-\\d$', ], 'ResourceLockedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'errorMessage', ], ], 'exception' => true, ], 'Role' => [ 'type' => 'string', 'max' => 576, 'min' => 1, 'pattern' => '^([\\u0021-\\u007F]+\\u002F)?[\\w+=,.@-]+$', ], 'RoleArn' => [ 'type' => 'string', 'max' => 618, 'min' => 32, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|us-iso-east-1|us-isob-east-1):iam::\\d{12}:role(\\u002F[\\u0021-\\u007F]+\\u002F|\\u002F)[\\w+=,.@-]+$', ], 'Roles' => [ 'type' => 'list', 'member' => [ 'shape' => 'Role', ], 'max' => 100, 'min' => 1, ], 'ScpActionDefinition' => [ 'type' => 'structure', 'required' => [ 'PolicyId', 'TargetIds', ], 'members' => [ 'PolicyId' => [ 'shape' => 'PolicyId', ], 'TargetIds' => [ 'shape' => 'TargetIds', ], ], ], 'Spend' => [ 'type' => 'structure', 'required' => [ 'Amount', 'Unit', ], 'members' => [ 'Amount' => [ 'shape' => 'NumericValue', ], 'Unit' => [ 'shape' => 'UnitValue', ], ], ], 'SsmActionDefinition' => [ 'type' => 'structure', 'required' => [ 'ActionSubType', 'Region', 'InstanceIds', ], 'members' => [ 'ActionSubType' => [ 'shape' => 'ActionSubType', ], 'Region' => [ 'shape' => 'Region', ], 'InstanceIds' => [ 'shape' => 'InstanceIds', ], ], ], 'Subscriber' => [ 'type' => 'structure', 'required' => [ 'SubscriptionType', 'Address', ], 'members' => [ 'SubscriptionType' => [ 'shape' => 'SubscriptionType', ], 'Address' => [ 'shape' => 'SubscriberAddress', ], ], ], 'SubscriberAddress' => [ 'type' => 'string', 'max' => 2147483647, 'min' => 1, 'pattern' => '(.*[\\n\\r\\t\\f\\ ]?)*', 'sensitive' => true, ], 'Subscribers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Subscriber', ], 'max' => 11, 'min' => 1, ], 'SubscriptionType' => [ 'type' => 'string', 'enum' => [ 'SNS', 'EMAIL', ], ], 'TargetId' => [ 'type' => 'string', 'max' => 68, 'min' => 12, 'pattern' => '^(ou-[0-9a-z]{4,32}-[a-z0-9]{8,32}$)|(\\d{12})', ], 'TargetIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetId', ], 'max' => 100, 'min' => 1, ], 'ThresholdType' => [ 'type' => 'string', 'enum' => [ 'PERCENTAGE', 'ABSOLUTE_VALUE', ], ], 'TimePeriod' => [ 'type' => 'structure', 'members' => [ 'Start' => [ 'shape' => 'GenericTimestamp', ], 'End' => [ 'shape' => 'GenericTimestamp', ], ], ], 'TimeUnit' => [ 'type' => 'string', 'enum' => [ 'DAILY', 'MONTHLY', 'QUARTERLY', 'ANNUALLY', ], ], 'UnitValue' => [ 'type' => 'string', 'max' => 2147483647, 'min' => 1, 'pattern' => '.*', ], 'UpdateBudgetActionRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'ActionId', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'ActionId' => [ 'shape' => 'ActionId', ], 'NotificationType' => [ 'shape' => 'NotificationType', ], 'ActionThreshold' => [ 'shape' => 'ActionThreshold', ], 'Definition' => [ 'shape' => 'Definition', ], 'ExecutionRoleArn' => [ 'shape' => 'RoleArn', ], 'ApprovalModel' => [ 'shape' => 'ApprovalModel', ], 'Subscribers' => [ 'shape' => 'Subscribers', ], ], ], 'UpdateBudgetActionResponse' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'OldAction', 'NewAction', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'OldAction' => [ 'shape' => 'Action', ], 'NewAction' => [ 'shape' => 'Action', ], ], ], 'UpdateBudgetRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'NewBudget', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'NewBudget' => [ 'shape' => 'Budget', ], ], ], 'UpdateBudgetResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateNotificationRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'OldNotification', 'NewNotification', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'OldNotification' => [ 'shape' => 'Notification', ], 'NewNotification' => [ 'shape' => 'Notification', ], ], ], 'UpdateNotificationResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateSubscriberRequest' => [ 'type' => 'structure', 'required' => [ 'AccountId', 'BudgetName', 'Notification', 'OldSubscriber', 'NewSubscriber', ], 'members' => [ 'AccountId' => [ 'shape' => 'AccountId', ], 'BudgetName' => [ 'shape' => 'BudgetName', ], 'Notification' => [ 'shape' => 'Notification', ], 'OldSubscriber' => [ 'shape' => 'Subscriber', ], 'NewSubscriber' => [ 'shape' => 'Subscriber', ], ], ], 'UpdateSubscriberResponse' => [ 'type' => 'structure', 'members' => [], ], 'User' => [ 'type' => 'string', 'max' => 576, 'min' => 1, 'pattern' => '^([\\u0021-\\u007F]+\\u002F)?[\\w+=,.@-]+$', ], 'Users' => [ 'type' => 'list', 'member' => [ 'shape' => 'User', ], 'max' => 100, 'min' => 1, ], 'errorMessage' => [ 'type' => 'string', ], ],];
