<?php
// This file was auto-generated from sdk-root/src/data/ce/2017-10-25/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-10-25', 'endpointPrefix' => 'ce', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'AWS Cost Explorer', 'serviceFullName' => 'AWS Cost Explorer Service', 'serviceId' => 'Cost Explorer', 'signatureVersion' => 'v4', 'signingName' => 'ce', 'targetPrefix' => 'AWSInsightsIndexService', 'uid' => 'ce-2017-10-25', ], 'operations' => [ 'GetCostAndUsage' => [ 'name' => 'GetCostAndUsage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetCostAndUsageRequest', ], 'output' => [ 'shape' => 'GetCostAndUsageResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BillExpirationException', ], [ 'shape' => 'DataUnavailableException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'RequestChangedException', ], ], ], 'GetDimensionValues' => [ 'name' => 'GetDimensionValues', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetDimensionValuesRequest', ], 'output' => [ 'shape' => 'GetDimensionValuesResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BillExpirationException', ], [ 'shape' => 'DataUnavailableException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'RequestChangedException', ], ], ], 'GetReservationCoverage' => [ 'name' => 'GetReservationCoverage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetReservationCoverageRequest', ], 'output' => [ 'shape' => 'GetReservationCoverageResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'DataUnavailableException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'GetReservationPurchaseRecommendation' => [ 'name' => 'GetReservationPurchaseRecommendation', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetReservationPurchaseRecommendationRequest', ], 'output' => [ 'shape' => 'GetReservationPurchaseRecommendationResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'DataUnavailableException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'GetReservationUtilization' => [ 'name' => 'GetReservationUtilization', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetReservationUtilizationRequest', ], 'output' => [ 'shape' => 'GetReservationUtilizationResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'DataUnavailableException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'GetTags' => [ 'name' => 'GetTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetTagsRequest', ], 'output' => [ 'shape' => 'GetTagsResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BillExpirationException', ], [ 'shape' => 'DataUnavailableException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'RequestChangedException', ], ], ], ], 'shapes' => [ 'AccountScope' => [ 'type' => 'string', 'enum' => [ 'PAYER', 'LINKED', ], ], 'AmortizedRecurringFee' => [ 'type' => 'string', ], 'AmortizedUpfrontFee' => [ 'type' => 'string', ], 'AttributeType' => [ 'type' => 'string', ], 'AttributeValue' => [ 'type' => 'string', ], 'Attributes' => [ 'type' => 'map', 'key' => [ 'shape' => 'AttributeType', ], 'value' => [ 'shape' => 'AttributeValue', ], ], 'BillExpirationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Context' => [ 'type' => 'string', 'enum' => [ 'COST_AND_USAGE', 'RESERVATIONS', ], ], 'Coverage' => [ 'type' => 'structure', 'members' => [ 'CoverageHours' => [ 'shape' => 'CoverageHours', ], ], ], 'CoverageByTime' => [ 'type' => 'structure', 'members' => [ 'TimePeriod' => [ 'shape' => 'DateInterval', ], 'Groups' => [ 'shape' => 'ReservationCoverageGroups', ], 'Total' => [ 'shape' => 'Coverage', ], ], ], 'CoverageHours' => [ 'type' => 'structure', 'members' => [ 'OnDemandHours' => [ 'shape' => 'OnDemandHours', ], 'ReservedHours' => [ 'shape' => 'ReservedHours', ], 'TotalRunningHours' => [ 'shape' => 'TotalRunningHours', ], 'CoverageHoursPercentage' => [ 'shape' => 'CoverageHoursPercentage', ], ], ], 'CoverageHoursPercentage' => [ 'type' => 'string', ], 'CoveragesByTime' => [ 'type' => 'list', 'member' => [ 'shape' => 'CoverageByTime', ], ], 'DataUnavailableException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'DateInterval' => [ 'type' => 'structure', 'required' => [ 'Start', 'End', ], 'members' => [ 'Start' => [ 'shape' => 'YearMonthDay', ], 'End' => [ 'shape' => 'YearMonthDay', ], ], ], 'Dimension' => [ 'type' => 'string', 'enum' => [ 'AZ', 'INSTANCE_TYPE', 'LINKED_ACCOUNT', 'OPERATION', 'PURCHASE_TYPE', 'REGION', 'SERVICE', 'USAGE_TYPE', 'USAGE_TYPE_GROUP', 'RECORD_TYPE', 'OPERATING_SYSTEM', 'TENANCY', 'SCOPE', 'PLATFORM', 'SUBSCRIPTION_ID', 'LEGAL_ENTITY_NAME', 'DEPLOYMENT_OPTION', 'DATABASE_ENGINE', 'CACHE_ENGINE', 'INSTANCE_TYPE_FAMILY', ], ], 'DimensionValues' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'Dimension', ], 'Values' => [ 'shape' => 'Values', ], ], ], 'DimensionValuesWithAttributes' => [ 'type' => 'structure', 'members' => [ 'Value' => [ 'shape' => 'Value', ], 'Attributes' => [ 'shape' => 'Attributes', ], ], ], 'DimensionValuesWithAttributesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DimensionValuesWithAttributes', ], ], 'EC2InstanceDetails' => [ 'type' => 'structure', 'members' => [ 'Family' => [ 'shape' => 'GenericString', ], 'InstanceType' => [ 'shape' => 'GenericString', ], 'Region' => [ 'shape' => 'GenericString', ], 'AvailabilityZone' => [ 'shape' => 'GenericString', ], 'Platform' => [ 'shape' => 'GenericString', ], 'Tenancy' => [ 'shape' => 'GenericString', ], 'CurrentGeneration' => [ 'shape' => 'GenericBoolean', ], 'SizeFlexEligible' => [ 'shape' => 'GenericBoolean', ], ], ], 'EC2Specification' => [ 'type' => 'structure', 'members' => [ 'OfferingClass' => [ 'shape' => 'OfferingClass', ], ], ], 'ESInstanceDetails' => [ 'type' => 'structure', 'members' => [ 'InstanceClass' => [ 'shape' => 'GenericString', ], 'InstanceSize' => [ 'shape' => 'GenericString', ], 'Region' => [ 'shape' => 'GenericString', ], 'CurrentGeneration' => [ 'shape' => 'GenericBoolean', ], 'SizeFlexEligible' => [ 'shape' => 'GenericBoolean', ], ], ], 'ElastiCacheInstanceDetails' => [ 'type' => 'structure', 'members' => [ 'Family' => [ 'shape' => 'GenericString', ], 'NodeType' => [ 'shape' => 'GenericString', ], 'Region' => [ 'shape' => 'GenericString', ], 'ProductDescription' => [ 'shape' => 'GenericString', ], 'CurrentGeneration' => [ 'shape' => 'GenericBoolean', ], 'SizeFlexEligible' => [ 'shape' => 'GenericBoolean', ], ], ], 'Entity' => [ 'type' => 'string', ], 'ErrorMessage' => [ 'type' => 'string', ], 'Estimated' => [ 'type' => 'boolean', ], 'Expression' => [ 'type' => 'structure', 'members' => [ 'Or' => [ 'shape' => 'Expressions', ], 'And' => [ 'shape' => 'Expressions', ], 'Not' => [ 'shape' => 'Expression', ], 'Dimensions' => [ 'shape' => 'DimensionValues', ], 'Tags' => [ 'shape' => 'TagValues', ], ], ], 'Expressions' => [ 'type' => 'list', 'member' => [ 'shape' => 'Expression', ], ], 'GenericBoolean' => [ 'type' => 'boolean', ], 'GenericString' => [ 'type' => 'string', ], 'GetCostAndUsageRequest' => [ 'type' => 'structure', 'members' => [ 'TimePeriod' => [ 'shape' => 'DateInterval', ], 'Granularity' => [ 'shape' => 'Granularity', ], 'Filter' => [ 'shape' => 'Expression', ], 'Metrics' => [ 'shape' => 'MetricNames', ], 'GroupBy' => [ 'shape' => 'GroupDefinitions', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetCostAndUsageResponse' => [ 'type' => 'structure', 'members' => [ 'NextPageToken' => [ 'shape' => 'NextPageToken', ], 'GroupDefinitions' => [ 'shape' => 'GroupDefinitions', ], 'ResultsByTime' => [ 'shape' => 'ResultsByTime', ], ], ], 'GetDimensionValuesRequest' => [ 'type' => 'structure', 'required' => [ 'TimePeriod', 'Dimension', ], 'members' => [ 'SearchString' => [ 'shape' => 'SearchString', ], 'TimePeriod' => [ 'shape' => 'DateInterval', ], 'Dimension' => [ 'shape' => 'Dimension', ], 'Context' => [ 'shape' => 'Context', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetDimensionValuesResponse' => [ 'type' => 'structure', 'required' => [ 'DimensionValues', 'ReturnSize', 'TotalSize', ], 'members' => [ 'DimensionValues' => [ 'shape' => 'DimensionValuesWithAttributesList', ], 'ReturnSize' => [ 'shape' => 'PageSize', ], 'TotalSize' => [ 'shape' => 'PageSize', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetReservationCoverageRequest' => [ 'type' => 'structure', 'required' => [ 'TimePeriod', ], 'members' => [ 'TimePeriod' => [ 'shape' => 'DateInterval', ], 'GroupBy' => [ 'shape' => 'GroupDefinitions', ], 'Granularity' => [ 'shape' => 'Granularity', ], 'Filter' => [ 'shape' => 'Expression', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetReservationCoverageResponse' => [ 'type' => 'structure', 'required' => [ 'CoveragesByTime', ], 'members' => [ 'CoveragesByTime' => [ 'shape' => 'CoveragesByTime', ], 'Total' => [ 'shape' => 'Coverage', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetReservationPurchaseRecommendationRequest' => [ 'type' => 'structure', 'required' => [ 'Service', ], 'members' => [ 'AccountId' => [ 'shape' => 'GenericString', ], 'Service' => [ 'shape' => 'GenericString', ], 'AccountScope' => [ 'shape' => 'AccountScope', ], 'LookbackPeriodInDays' => [ 'shape' => 'LookbackPeriodInDays', ], 'TermInYears' => [ 'shape' => 'TermInYears', ], 'PaymentOption' => [ 'shape' => 'PaymentOption', ], 'ServiceSpecification' => [ 'shape' => 'ServiceSpecification', ], 'PageSize' => [ 'shape' => 'NonNegativeInteger', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetReservationPurchaseRecommendationResponse' => [ 'type' => 'structure', 'members' => [ 'Metadata' => [ 'shape' => 'ReservationPurchaseRecommendationMetadata', ], 'Recommendations' => [ 'shape' => 'ReservationPurchaseRecommendations', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetReservationUtilizationRequest' => [ 'type' => 'structure', 'required' => [ 'TimePeriod', ], 'members' => [ 'TimePeriod' => [ 'shape' => 'DateInterval', ], 'GroupBy' => [ 'shape' => 'GroupDefinitions', ], 'Granularity' => [ 'shape' => 'Granularity', ], 'Filter' => [ 'shape' => 'Expression', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetReservationUtilizationResponse' => [ 'type' => 'structure', 'required' => [ 'UtilizationsByTime', ], 'members' => [ 'UtilizationsByTime' => [ 'shape' => 'UtilizationsByTime', ], 'Total' => [ 'shape' => 'ReservationAggregates', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetTagsRequest' => [ 'type' => 'structure', 'required' => [ 'TimePeriod', ], 'members' => [ 'SearchString' => [ 'shape' => 'SearchString', ], 'TimePeriod' => [ 'shape' => 'DateInterval', ], 'TagKey' => [ 'shape' => 'TagKey', ], 'NextPageToken' => [ 'shape' => 'NextPageToken', ], ], ], 'GetTagsResponse' => [ 'type' => 'structure', 'required' => [ 'Tags', 'ReturnSize', 'TotalSize', ], 'members' => [ 'NextPageToken' => [ 'shape' => 'NextPageToken', ], 'Tags' => [ 'shape' => 'TagList', ], 'ReturnSize' => [ 'shape' => 'PageSize', ], 'TotalSize' => [ 'shape' => 'PageSize', ], ], ], 'Granularity' => [ 'type' => 'string', 'enum' => [ 'DAILY', 'MONTHLY', ], ], 'Group' => [ 'type' => 'structure', 'members' => [ 'Keys' => [ 'shape' => 'Keys', ], 'Metrics' => [ 'shape' => 'Metrics', ], ], ], 'GroupDefinition' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'GroupDefinitionType', ], 'Key' => [ 'shape' => 'GroupDefinitionKey', ], ], ], 'GroupDefinitionKey' => [ 'type' => 'string', ], 'GroupDefinitionType' => [ 'type' => 'string', 'enum' => [ 'DIMENSION', 'TAG', ], ], 'GroupDefinitions' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupDefinition', ], ], 'Groups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ], 'InstanceDetails' => [ 'type' => 'structure', 'members' => [ 'EC2InstanceDetails' => [ 'shape' => 'EC2InstanceDetails', ], 'RDSInstanceDetails' => [ 'shape' => 'RDSInstanceDetails', ], 'RedshiftInstanceDetails' => [ 'shape' => 'RedshiftInstanceDetails', ], 'ElastiCacheInstanceDetails' => [ 'shape' => 'ElastiCacheInstanceDetails', ], 'ESInstanceDetails' => [ 'shape' => 'ESInstanceDetails', ], ], ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Key' => [ 'type' => 'string', ], 'Keys' => [ 'type' => 'list', 'member' => [ 'shape' => 'Key', ], ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'LookbackPeriodInDays' => [ 'type' => 'string', 'enum' => [ 'SEVEN_DAYS', 'THIRTY_DAYS', 'SIXTY_DAYS', ], ], 'MetricAmount' => [ 'type' => 'string', ], 'MetricName' => [ 'type' => 'string', ], 'MetricNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricName', ], ], 'MetricUnit' => [ 'type' => 'string', ], 'MetricValue' => [ 'type' => 'structure', 'members' => [ 'Amount' => [ 'shape' => 'MetricAmount', ], 'Unit' => [ 'shape' => 'MetricUnit', ], ], ], 'Metrics' => [ 'type' => 'map', 'key' => [ 'shape' => 'MetricName', ], 'value' => [ 'shape' => 'MetricValue', ], ], 'NetRISavings' => [ 'type' => 'string', ], 'NextPageToken' => [ 'type' => 'string', ], 'NonNegativeInteger' => [ 'type' => 'integer', 'min' => 0, ], 'OfferingClass' => [ 'type' => 'string', 'enum' => [ 'STANDARD', 'CONVERTIBLE', ], ], 'OnDemandCostOfRIHoursUsed' => [ 'type' => 'string', ], 'OnDemandHours' => [ 'type' => 'string', ], 'PageSize' => [ 'type' => 'integer', ], 'PaymentOption' => [ 'type' => 'string', 'enum' => [ 'NO_UPFRONT', 'PARTIAL_UPFRONT', 'ALL_UPFRONT', 'LIGHT_UTILIZATION', 'MEDIUM_UTILIZATION', 'HEAVY_UTILIZATION', ], ], 'PurchasedHours' => [ 'type' => 'string', ], 'RDSInstanceDetails' => [ 'type' => 'structure', 'members' => [ 'Family' => [ 'shape' => 'GenericString', ], 'InstanceType' => [ 'shape' => 'GenericString', ], 'Region' => [ 'shape' => 'GenericString', ], 'DatabaseEngine' => [ 'shape' => 'GenericString', ], 'DatabaseEdition' => [ 'shape' => 'GenericString', ], 'DeploymentOption' => [ 'shape' => 'GenericString', ], 'LicenseModel' => [ 'shape' => 'GenericString', ], 'CurrentGeneration' => [ 'shape' => 'GenericBoolean', ], 'SizeFlexEligible' => [ 'shape' => 'GenericBoolean', ], ], ], 'RedshiftInstanceDetails' => [ 'type' => 'structure', 'members' => [ 'Family' => [ 'shape' => 'GenericString', ], 'NodeType' => [ 'shape' => 'GenericString', ], 'Region' => [ 'shape' => 'GenericString', ], 'CurrentGeneration' => [ 'shape' => 'GenericBoolean', ], 'SizeFlexEligible' => [ 'shape' => 'GenericBoolean', ], ], ], 'RequestChangedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ReservationAggregates' => [ 'type' => 'structure', 'members' => [ 'UtilizationPercentage' => [ 'shape' => 'UtilizationPercentage', ], 'PurchasedHours' => [ 'shape' => 'PurchasedHours', ], 'TotalActualHours' => [ 'shape' => 'TotalActualHours', ], 'UnusedHours' => [ 'shape' => 'UnusedHours', ], 'OnDemandCostOfRIHoursUsed' => [ 'shape' => 'OnDemandCostOfRIHoursUsed', ], 'NetRISavings' => [ 'shape' => 'NetRISavings', ], 'TotalPotentialRISavings' => [ 'shape' => 'TotalPotentialRISavings', ], 'AmortizedUpfrontFee' => [ 'shape' => 'AmortizedUpfrontFee', ], 'AmortizedRecurringFee' => [ 'shape' => 'AmortizedRecurringFee', ], 'TotalAmortizedFee' => [ 'shape' => 'TotalAmortizedFee', ], ], ], 'ReservationCoverageGroup' => [ 'type' => 'structure', 'members' => [ 'Attributes' => [ 'shape' => 'Attributes', ], 'Coverage' => [ 'shape' => 'Coverage', ], ], ], 'ReservationCoverageGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReservationCoverageGroup', ], ], 'ReservationGroupKey' => [ 'type' => 'string', ], 'ReservationGroupValue' => [ 'type' => 'string', ], 'ReservationPurchaseRecommendation' => [ 'type' => 'structure', 'members' => [ 'AccountScope' => [ 'shape' => 'AccountScope', ], 'LookbackPeriodInDays' => [ 'shape' => 'LookbackPeriodInDays', ], 'TermInYears' => [ 'shape' => 'TermInYears', ], 'PaymentOption' => [ 'shape' => 'PaymentOption', ], 'ServiceSpecification' => [ 'shape' => 'ServiceSpecification', ], 'RecommendationDetails' => [ 'shape' => 'ReservationPurchaseRecommendationDetails', ], 'RecommendationSummary' => [ 'shape' => 'ReservationPurchaseRecommendationSummary', ], ], ], 'ReservationPurchaseRecommendationDetail' => [ 'type' => 'structure', 'members' => [ 'InstanceDetails' => [ 'shape' => 'InstanceDetails', ], 'RecommendedNumberOfInstancesToPurchase' => [ 'shape' => 'GenericString', ], 'RecommendedNormalizedUnitsToPurchase' => [ 'shape' => 'GenericString', ], 'MinimumNumberOfInstancesUsedPerHour' => [ 'shape' => 'GenericString', ], 'MinimumNormalizedUnitsUsedPerHour' => [ 'shape' => 'GenericString', ], 'MaximumNumberOfInstancesUsedPerHour' => [ 'shape' => 'GenericString', ], 'MaximumNormalizedUnitsUsedPerHour' => [ 'shape' => 'GenericString', ], 'AverageNumberOfInstancesUsedPerHour' => [ 'shape' => 'GenericString', ], 'AverageNormalizedUnitsUsedPerHour' => [ 'shape' => 'GenericString', ], 'AverageUtilization' => [ 'shape' => 'GenericString', ], 'EstimatedBreakEvenInMonths' => [ 'shape' => 'GenericString', ], 'CurrencyCode' => [ 'shape' => 'GenericString', ], 'EstimatedMonthlySavingsAmount' => [ 'shape' => 'GenericString', ], 'EstimatedMonthlySavingsPercentage' => [ 'shape' => 'GenericString', ], 'EstimatedMonthlyOnDemandCost' => [ 'shape' => 'GenericString', ], 'EstimatedReservationCostForLookbackPeriod' => [ 'shape' => 'GenericString', ], 'UpfrontCost' => [ 'shape' => 'GenericString', ], 'RecurringStandardMonthlyCost' => [ 'shape' => 'GenericString', ], ], ], 'ReservationPurchaseRecommendationDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReservationPurchaseRecommendationDetail', ], ], 'ReservationPurchaseRecommendationMetadata' => [ 'type' => 'structure', 'members' => [ 'RecommendationId' => [ 'shape' => 'GenericString', ], 'GenerationTimestamp' => [ 'shape' => 'GenericString', ], ], ], 'ReservationPurchaseRecommendationSummary' => [ 'type' => 'structure', 'members' => [ 'TotalEstimatedMonthlySavingsAmount' => [ 'shape' => 'GenericString', ], 'TotalEstimatedMonthlySavingsPercentage' => [ 'shape' => 'GenericString', ], 'CurrencyCode' => [ 'shape' => 'GenericString', ], ], ], 'ReservationPurchaseRecommendations' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReservationPurchaseRecommendation', ], ], 'ReservationUtilizationGroup' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'ReservationGroupKey', ], 'Value' => [ 'shape' => 'ReservationGroupValue', ], 'Attributes' => [ 'shape' => 'Attributes', ], 'Utilization' => [ 'shape' => 'ReservationAggregates', ], ], ], 'ReservationUtilizationGroups' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReservationUtilizationGroup', ], ], 'ReservedHours' => [ 'type' => 'string', ], 'ResultByTime' => [ 'type' => 'structure', 'members' => [ 'TimePeriod' => [ 'shape' => 'DateInterval', ], 'Total' => [ 'shape' => 'Metrics', ], 'Groups' => [ 'shape' => 'Groups', ], 'Estimated' => [ 'shape' => 'Estimated', ], ], ], 'ResultsByTime' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResultByTime', ], ], 'SearchString' => [ 'type' => 'string', ], 'ServiceSpecification' => [ 'type' => 'structure', 'members' => [ 'EC2Specification' => [ 'shape' => 'EC2Specification', ], ], ], 'TagKey' => [ 'type' => 'string', ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Entity', ], ], 'TagValues' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Values' => [ 'shape' => 'Values', ], ], ], 'TermInYears' => [ 'type' => 'string', 'enum' => [ 'ONE_YEAR', 'THREE_YEARS', ], ], 'TotalActualHours' => [ 'type' => 'string', ], 'TotalAmortizedFee' => [ 'type' => 'string', ], 'TotalPotentialRISavings' => [ 'type' => 'string', ], 'TotalRunningHours' => [ 'type' => 'string', ], 'UnusedHours' => [ 'type' => 'string', ], 'UtilizationByTime' => [ 'type' => 'structure', 'members' => [ 'TimePeriod' => [ 'shape' => 'DateInterval', ], 'Groups' => [ 'shape' => 'ReservationUtilizationGroups', ], 'Total' => [ 'shape' => 'ReservationAggregates', ], ], ], 'UtilizationPercentage' => [ 'type' => 'string', ], 'UtilizationsByTime' => [ 'type' => 'list', 'member' => [ 'shape' => 'UtilizationByTime', ], ], 'Value' => [ 'type' => 'string', ], 'Values' => [ 'type' => 'list', 'member' => [ 'shape' => 'Value', ], ], 'YearMonthDay' => [ 'type' => 'string', 'pattern' => '\\d{4}-\\d{2}-\\d{2}', ], ],];