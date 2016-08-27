<?php
/*
require(dirname(__FILE__).'/lib/app.class.php');
if ( !isset($_SESSION['uid']) || $_SESSION['uid'] == '' )
{
	header("Location: index.php?err=3");
	exit;
}

$company_id = 1;
$sql = "SELECT * FROM ".$oApp->prefix."customer WHERE id='".$company_id."'";
$rs = $oApp->db_query($sql);
$rw = $oApp->db_assoc($rs);
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document</title>
</head>

<body style="font-family:Verdana, Geneva, sans-serif; margin:0px; padding:10px; font-size:11px;">
	<h2>Introduction to the ROC Template</h2>
    <p>This document, the PCI DSS Template for Report on Compliance for use with PCI DSS v3.0(“ROCReporting Template”), is the mandatory template for Qualified Security Assessors (QSAs) completing a Report on Compliance (ROC)for assessments against the PCI DSS Requirements and Security Assessment Procedures v3.0.The ROC Reporting Template provides reporting instructions and the template for QSAs to use. This can help provide reasonable assurance that a consistent level of reporting is present among assessors. </p>
    <p><b>Use of thisReporting Template is mandatory for all v3.0 submissions; however, it may NOT be used for 2.0 submissions. Refer to the ROC Reporting Instructions for PCI DSS v2.0 for guidance on completing 2.0 submissions.</b></p>
<p>Tables have been included in this template to facilitate the reporting process for certain lists and other information as appropriate. The tables in this template may be modified to increase/decrease the number of rows, or to change column width. Additional appendices may be added if the assessor feels there is relevant information to be included that is not addressed in the current format. However, the assessor must not remove any details fromthe tables provided in this document. Personalization, such as the addition of company logos, is acceptable.</p>
<p>The Report on Compliance (ROC) is produced during onsite PCI DSS assessments as part of an entity's validation process. The ROC provides details about the entity's environment and assessment methodology, and documents the entity's compliance status for each PCI DSS Requirement. A PCI DSS compliance assessment involves thorough testing and assessment activities, from which the assessor will generate detailed work papers. These work papers contain comprehensive records of the assessment activities, including observations, results of system testing, configuration data, file lists, interview notes, documentation excerpts, references, screenshots, and other evidence collected during the course of the assessment. The ROC is effectively a <strong>summary of evidence</strong> derived from the assessor's work papers to describe how the assessor performed the validation activities and how the resultant findings were reached. At a high level, the ROC provides a comprehensive <strong>summary of testing activities performed and information collected</strong> during the assessment against the PCI DSS Requirements and Security Assessment Procedures v3.0. The information contained in a ROC must provide enough detail and coverage to verify that the payment application is compliant with all PCI DSS requirements.</p>
<h2>ROC Sections</h2>
    <h2>The ROC includes the following sections and appendices:</h2>
     <ul>
     <li>Section 1: Contact Information and Report Date</li>
     <li>Section 2: Executive Summary</li>
     <li>Section 3: Description of Scope of Work and Approach Taken </li>
     <li>Section 4: Details about Reviewed Environment </li>
     <li>Section 5: Quarterly Scan Results </li> 
     <li>Section 6: Findings and Observations </li>
     <li>Appendix A: Additional PCI DSS Requirements for Shared Hosting Providers</li>
     <li>Appendices B and C: Compensating Controls and Compensating Controls Worksheet (as applicable)</li>
     <li>Appendix D: Segmentation and Sampling of Business Facilities/System Components (diagram)</li>
     </ul>
     <p>The first five sections must be thoroughly and accurately completed, in order for the assessment findings in Section 6 to have the proper context. The Reporting Template includes tables with Reporting Instructions built-in to help assessors provide all required information throughout the document. Responses should be specific, but efficient. Details provided should focus on concise quality of detail, rather than lengthy, repeated verbiage. Parroting the testing procedure within a description is discouraged, as it does not add any level of assurance to the narrative. Use of template language for summaries and descriptions is discouraged and details should be specifically relevant to the assessed entity.</p>
     
<h2>ROC Summary of Assessor Findings</h2>
<p>With the Reporting Template, an effort was made to efficiently use space, and as such, there is one response column for results/evidence ("ROC Reporting Details: Assessor's Response") instead of three. Additionally, the results for "Summary of Assessor Findings" were expanded to more effectively represent the testing and results that took place, which should be aligned with the AOC.</p>
</p>There are now five results possible – In Place, In Place with CCW (Compensating Control Worksheet), Not Applicable, Not Tested, and Not in Place. At each sub-requirement there is a place to designate the result ("Summary of Assessor Findings"), which can be checked as appropriate. See the example format on the following page, as referenced.</p>
<ul>
<li><strong>In Place</strong>: Should be checked when all aspects of the testing procedure are in place or a combination of in place and not applicable.
<p><em>In the sample, the Summary of Assessment Findings at 1.1 is "in place" if all report findings are in place for 1.1.a and 1.1.b or a combination of in place and not applicable.</em></p></li>
<li><strong>In Place with CCW</strong>: Should be checked when the requirement is not met directly as stated but is being met with the assistance of a documented Compensating Control (see Appendix C for the Compensating Control Worksheet). A result of "In Place with CCW" is not valid unless the ROC includes the documented Compensating Control Worksheet. All reporting instructions should be addressed in this instance for the requirement accurately.</li>
</ul>
<ul>
  <li><strong>Not Applicable</strong>: Should be checked when the requirement does not apply to the environment being assessed. Certain requirements are always applicable (3.2.1-3.2.3, for example), and that will be designated by a grey box under "Not Applicable." Note that a "Not Applicable" response still requires a detailed description explaining how it was determined that the requirement does not apply. 
  <p><em>In the sample, the Summary of Assessment Findings at 1.1 is "not applicable" if both 1.1.a and 1.1.b are concluded to be "not applicable." A requirement is applicable if any aspects of the requirement apply to the environment being assessed, and a "Not Applicable" designation in the Summary of Assessment Findings should not be used in this scenario.</em></p></li>
  <li><strong>Not Tested</strong>: Should be checked if a requirement was not tested because it was excluded from the assessment. The requirement may actually be applicable to the environment; however, because the control was not tested, the assessor has not verified whether the requirement is applicable or not.
<p>This could also be used where an entity is being assessed against 3.0, but the third-party service provider they are using is only compliant to 2.0. See guidance for this under "ROC Reporting Details."</p></li>
  <li><strong>Not in Place</strong>: Should be checked if any single aspect of the requirement has not been met.
<p><em>In the sample, the Summary of Assessment Findings at 1.1 is "not in place" if either 1.1.a or 1.1.b are concluded to be "not in place."</em></p></li>
</ul>
<h2>Requirement X: Sample</h2>

	<table width="100%">
    	<thead>
        	<tr>
            	<th rowspan="2" align="left" style="background:#c5e3c0; padding:5px;">PCI DSS Requirements and Testing Procedures</th>
            	<th rowspan="2" align="left" style="background:#c5e3c0; padding:5px;"><strong>Reporting  Instruction</strong></th>
            	<th rowspan="2" align="left" style="background:#c5e3c0; padding:5px;"><strong>ROC  Reporting Details:<br />
Assessor&rsquo;s Response</strong></th>
           	  <th colspan="5" style="background:#c5e3c0; padding:5px;"><strong>Summary  of Assessment Findings  </strong>(check  one)</th>
            </tr>
        	<tr>
        	  <th style="background:#c5e3c0; padding:5px;">In Place</th>
        	  <th style="background:#c5e3c0; padding:5px;">In Place with CCW</th>
        	  <th style="background:#c5e3c0; padding:5px;">Not Applicable</th>
        	  <th style="background:#c5e3c0; padding:5px;">Not Tested</th>
        	  <th style="background:#c5e3c0; padding:5px;">Not in Place</th>
      	  </tr>
        	<tr>
        	  <th colspan="3" align="left" style="background:#e8f3dc; padding:5px;"><strong>1.1</strong>Sample  sub-requirement</th>
        	  <th style="background:#e8f3dc; padding:5px;">&nbsp;</th>
        	  <th style="background:#e8f3dc; padding:5px;">&nbsp;</th>
        	  <th style="background:#e8f3dc; padding:5px;">&nbsp;</th>
        	  <th style="background:#e8f3dc; padding:5px;">&nbsp;</th>
        	  <th style="background:#e8f3dc; padding:5px;">&nbsp;</th>
      	  </tr>
        	<tr>
        	  <th align="left" style="background:#ffffff; padding:5px;"><strong>1.1.a </strong>Sample  testing procedure</th>
        	  <th align="left" style="background:#ffffff; padding:5px;">Reporting Instruction</th>
        	  <th colspan="6" align="left" style="background:#ffffff; padding:5px;">&nbsp;</th>
       	  </tr>
        	<tr>
        	  <th align="left" style="background:#ffffff; padding:5px;">1.1.b Sample testing procedure</th>
        	  <th align="left" style="background:#ffffff; padding:5px;">Reporting Instruction</th>
        	  <th colspan="6" align="left" style="background:#ffffff; padding:5px;">&nbsp;</th>
      	  </tr>
      </thead>
</table><br />
<h2>ROC Reporting Details</h2>
<p>The reporting instructions in the Reporting Template explain the intent of the response required. There is no need to repeat the testing procedure or the reporting instruction within each assessor response. As noted earlier, responses should be specific and relevant to the assessed entity. Details provided should focus on concise quality of detail, rather than lengthy, repeated verbiage and should avoid parroting of the testing procedure without additional detail or generic template language.</p>
<h2>Assessor responses will generally fall into categories such as the following: </h2>
<ul>
<li>One word <strong>(yes/no)</strong></li> 
<P><em>Example Reporting Instruction: <strong>Identify</strong> whether the assessed entity is an issuer or supports issuing services. (<strong>yes/no</strong>)</em></P>
<li>Document name or interviewee job title/reference – In Sections 2.8, "Documentation Reviewed," and 2.9, "Individuals Interviewed" below, there is a space for a reference number and<em><strong> it is the QSA's choice</strong></em> to use the document name/interviewee job title or the reference number at the individual reporting instruction response.
<P><em>Example Reporting Instruction: <strong>Identify</strong> the document that defines vendor software development processes.<br />
Example Reporting Instruction: <strong>Identify the individuals</strong> interviewed who confirm that … </em></P>
</li>
<li>Sample description – For sampling, the QSA must use the table at "Sample sets for reporting" in the Details about Reviewed Environment section of this document to fully report the sampling, but<strong><em> it is the QSA's choice</em></strong>to use the Sample set reference number ("Sample Set-5") or list out the items from the sample again at the individual reporting instruction response.
<p><em>Example Reporting Instruction: <strong>Identify the sample</strong> of removable media observed.</em></p></li>
<li>Brief description/short answer – Short and to the point, but provide detail and individual content that is not simply an echoing of the testing procedure or reporting instruction nor a template answer used from report-to-report, but instead relevant and specific to the assessed entity. 
<p><em>Example Reporting Instruction:<strong> Describe</strong> the procedures for secure key distribution that were observed to be implemented.<br /> 
Example Reporting Instruction: <strong>For the interview</strong>, summarize the relevant details discussed that verify …</em></p></li>

<h2>Dependence on another service provider's compliance:</h2>
<p>Generally, when reporting on a requirement where a third-party service provider is responsible for the tasks, an acceptable response for an "in place" finding may be something like: </p>
<P><em>"Assessor verified this is the responsibility of Service Provider X, as verified through review of x/y contract (document). Assessor reviewed the AOC for Service Provider X, dated MM/DD/YYYY, and confirmed the service provider was found to be PCI DSS compliant for all applicable requirements, and that it covers the scope of the services used by the assessed entity." </em></P>
<P>That response could vary, but what's important is that it is noted as "in place" and that there has been a level of testing by the assessor to support the conclusion that this responsibility is verified and that the responsible party has been tested against the requirement and found to be compliant.</P></li>
</ul>
<h2>Dependence on another service provider's compliance where the service providers is compliant with PCI DSS v2.0, but the entity is being assessed against PCI DSS v3.0:</h2>
<p>During the implementation period for PCI DSS 3.0, an entity being assessed against PCI DSS v3.0 may be relying on the compliance of third-party service providers who are assessed as compliant against PCI DSS v2.0. This is acceptable, and there is no need to force the third-party service provider to be assessed against PCI DSS 3.0 while their PCI DSS 2.0 assessment is still valid. How should this be documented?</p>
<p>In the scenario where the entity is assessing against PCI DSS 3.0, but the third-party service provider's current compliant assessment is against PCI DSS 2.0, two possibilities exist: </p>
<ul>
<li>The requirement and/or testing procedure exists in both standards, in which case the response noted above would likely be sufficient. Noting that the service provider is compliant with 2.0 of the PCI DSS in the response is worthwhile to address any possible changes to requirements or testing procedures.</li><br />
<li>However, if this is a new testing procedure or there are substantial changes in intent or content, the honest answer would be that it is not tested, and the appropriate column marked. An appropriate response might read something like the following: 
<p><em>"Not tested. Assessor verified this is the responsibility of Service Provider X, as verified through review of x/y contract (document). Assessor reviewed the AOC for Service Provider X, dated 1/12/2013, and confirmed the SP is compliant with v2.0 of the PCI DSS." </em></p>
<p>If the testing procedure existed in some form in 2.0 but has seen substantive change, again a "Not tested" result may be appropriate, as the 2.0 testing is likely not sufficient for it to be considered fully tested and in place. A response like the above "Not tested" response would demonstrate that the 2.0 rigor was validated. Refer to the FAQs on the PCI SSC website at <u>https://www.pcisecuritystandards.org/faq/</u> for more information.</p></li>
</ul>
<h2>Do's and Don'ts: General Guidance and Best Practices</h2>

<table width="100%">
    	<thead>
        	<tr>
            	<th width="50%" rowspan="" align="left" style="background:#c5e3c0; padding:5px;">DO:</th>
            	<th width="50%" rowspan="" align="left" style="background:#c5e3c0; padding:5px;"><strong>DON'T:</strong></th>
            	

</tr>
        	<tr>
        	  <th align="left" style="background:#ffffff; padding:5px;">
              <ul>
              <li>Use this Reporting Template when assessing against v3.0 of the PCI DSS.</li><br />
       	      <li>Complete all sections in the order specified.</li><br />
               <li> Read and understand the intent of each Requirement and Testing Procedure.</li><br />
       	       <li>Provide a response for every Testing Procedure.</li><br />
       	       <li>Provide sufficient detail and information to support the designated finding, but be concise.</li><br />
       	       <li>Describe how a Requirement was verified per the Reporting Instruction, not just that it was verified.</li><br />
       	       <li>Ensure the parts of the Testing Procedure and Reporting Instruction are addressed.</li><br />
       	       <li>Ensure the response covers all applicable system components. </li><br />
               <li>Perform an internal quality assurance review of the ROC for clarity, accuracy, and quality.</li><br />
       	        <li>Provide useful, meaningful diagrams, as directed.</li>
                </ul>
      	      </th>
        	  <th align="left" valign="top" style="background:#ffffff; padding:5px;">
              <ul>
              <li>Don't report items in the "In Place" column unless they have been verified as being "in place" as stated. </li><br />
              <li>Don't include forward-looking statements or project plans in the "In Place" assessor response.</li><br />
              <li>Don't simply repeat or echo the Testing Procedure in the response.</li><br />
              <li>Don't copy responses from one Testing Procedure to another.</li><br />
              <li>Don't copy responses from previous assessments.</li><br />
               <li>Don't include information irrelevant to the assessment.</li>
              </ul>
       	      </th>
      	  </tr>
  </thead>
</table>
<h2>ROC Template for PCI Data Security Standard v3.0</h2>
<p>This template is to be used for creating a Report on Compliance. Content and format for a ROC is defined as follows:</p>
<h2>1. 	Contact Information and Report Date</h2>
<h3><em>1.1 Contact information </em></h3>
<table width="100%">
    	<thead>
        	<tr>
            	<th colspan="2" rowspan="" align="left" style="background:#c5e3c0; padding:5px;">Client </th>                  
      	  </tr>
          <tr>
          <th align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Company name:</li></th>
          <th align="left" style="background:#ffffff; padding:5px;"><?php echo $rw['company_name']; ?></th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Company address:</li></th>
            <th  align="left" style="background:#ffffff; padding:5px;"><?php echo $rw['company_address']; ?></th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Company URL:</li></th>
            <th  align="left"style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Company contact name:</li></th>
            <th  align="left" style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Contact phone number:</li></th>
            <th  align="left" style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Contact e-mail address:</li></th>
            <th  align="left" style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
        <tr>
            	<th height="23" colspan="2" rowspan="" align="left" style="background:#c5e3c0; padding:5px;">Assessor Company <br /></th>                  
      	  </tr>	
           <tr>
          <th width="21%"  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Company name:</li></th>
          <th width="79%"  style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Company address:</li></th>
            <th  align="left" style="background:#ffffff;padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Company website:</li></th>
            <th  align="left"style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            	<th colspan="2" rowspan="" align="left" style="background:#c5e3c0; padding:5px;">Assessor</th>                  
      	  </tr>	
          <tr>
            <th  align="left" style="background:#e8f3dc;padding:5px;"><li style="margin-left:12px;">Assessor name:</li></th>
            <th  align="left"style="background:#ffffff;padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc;padding:5px;"><li style="margin-left:12px;">Assessor PCI credentials::</li></th>
            <th  align="left" style="background:#ffffff;padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc;padding:5px;"><li style="margin-left:12px;">Assessor phone number:</li></th>
            <th  align="left" style="background:#ffffff;padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Assessor e-mail address:</li></th>
            <th  align="left" style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
           <tr>
            	<th colspan="2" rowspan="" align="left" style="background:#c5e3c0; padding:5px;">Assessor Quality Assurance (QA) Primary Reviewer</th>                  
      	  </tr>	
           <tr>
          <th width="21%"  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">QA reviewer name:</li></th>
          <th width="79%"  style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">QA reviewer phone number:</li></th>
            <th  align="left" style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">QA reviewer e-mail address:</li></th>
            <th  align="left"style="background:#ffffff;padding:5px;">&nbsp;</th>
          </tr>
  </thead>
</table>
<h3><em>1.2</em> <em>Date and timeframe of assessment </em></h3>
 <table width="100%">
    	<thead>
        	
          <tr>
          <th width="48%"  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Date of Report:</li></th>
          <th width="52%"  style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Timeframe of assessment (start date to completion date):</li></th>
            <th  align="left" style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th  align="left" style="background:#e8f3dc;padding:5px;"><li style="margin-left:12px;">Identify date(s) spent onsite at the entity:</li></th>
            <th  align="left"style="background:#ffffff;padding:5px;">&nbsp;</th>
          </tr>
          <tr>
            <th height="33"  align="left" style="background:#e8f3dc; padding:5px;"><li style="margin-left:12px;">Descriptions of time spent onsite at the entity and time spent performing remote assessment activities, including time spent on validation of remediation activities.</li></th>
            <th  align="left" style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
   </thead>
</table>
   <h3><em>1.3 PCI DSS version</em></h3>
	<table width="100%">
    	<thead>
          <tr>
          <th align="left" style="background:#e8f3dc; padding:5px;">
			<li style="margin-left:12px;">Version of the PCI Data Security Standard used for the assessment (should be 3.0):</li>
		  </th>
          <th style="background:#ffffff; padding:5px;">&nbsp;</th>
          </tr>
		</thead>
	</table>
<h2><b>2. Executive Summary</b></h2>
<h3>2.1<em> Description of the entity's payment card business</em></h3>
<p>Provide an overview of the entity's payment card business, including:</p>
<table width="100%">
    	<thead>
          <tr>
          <th width="50%" height="74"  align="left" bgcolor="#CCCCCC" style="background:#e8f3dc;"><li>Describe how and why the entity stores, processes, and/or transmits cardholder data.<br />
            <p ><em >Note: This is not intended to be a cut-and-paste from the entity's web site, but should be a tailored description that shows the assessor understands payment and the entity's role.</em></p></li></th>
          <th width="50%"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="67"  align="left" style="background:#e8f3dc;"><li>What types of payment channels the entity serves, such as card-present and card-not-present (for example, mail order/telephone order (MOTO), e-commerce).</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="59"  align="left" style="background:#e8f3dc;"><li>Any entities that the assessed entity connects to for payment transmission or processing, including processor relationships.</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
  </thead>
</table>
 <h3><em>2.2 High-level network diagram(s)</em></h3>
<p> Provide a<strong><em> high-level</em></strong> network diagram (either obtained from the entity or created by assessor) of the entity's networking topography, showing the overall architecture of the environment being assessed. This high-level diagram should summarize all locations and key systems, and the boundaries between them and should include the following.</p>
 <ul>
   <li>Connections into and out of the network including demarcation points between the cardholder data environment (CDE) and other networks/zones </li>
 </ul>
 <ul>
  <li>Critical components within the cardholder data environment, including POS devices, systems, databases, and web servers, as applicable </li>
 </ul>
 <ul>
   <li>Other necessary payment components, as applicable</li>
 </ul>
 <strong>&lt;Insert high-level network diagram(s)&gt; </strong>
<h2> 3. Description of Scope of Work and Approach Taken</h2>
<h3><em>3.1  Assessor's validation of scope accuracy</em></h3>
Document how the assessor validated the accuracy of the PCI DSS scope for the assessment, including:
<table width="100%">
    	<thead>
          <tr>
          <th width="50%" height="48"  align="left" bgcolor="#CCCCCC" style="background:#e8f3dc;"><li>The methods or processes (for example, tools, observations, feedback, scans, data flow analysis) used to identify and document all existences of cardholder data:<em ></em></li></th>
          <th width="50%"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="55"  align="left" style="background:#e8f3dc;"><li>The methods or processes (for example, tools, observations, feedback, scans, data flow analysis) used to verify that no cardholder data exists outside of the CDE scope defined for this assessment:</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="47"  align="left" style="background:#e8f3dc;"><li>How the results of the methods/processes were evaluated to verify that PCI DSS scope is appropriate:</li></th>
            <th  style="background:#ffffff;"><p>&nbsp;</p>
            <p>&nbsp;</p></th>
          </tr>
          <tr>
            <th height="50"  align="left" style="background:#e8f3dc;"><li>How the results of the methods/processes were documented (for example, the results may be a diagram or an inventory of cardholder data locations):</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="41"  align="left" style="background:#e8f3dc;"><li>Why the methods used for scope verification are considered by the assessor to be effective and accurate:</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="38"  align="left" style="background:#e8f3dc;"><li>Provide the name of the assessor who attests that the scope of the assessment has been verified to be accurate and appropriate:</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
  </thead>
</table>
<h3><strong><em>3.2   Environment on which the assessment is focused </em></strong></h3>
<p>Provide an overview of the scope of this assessment encompassing the people, processes, technologies, and locations (for example, client's Internetaccess points, internal corporate network, processing connections).</p>
<table width="100%">
    	<thead>
          <tr>
          <th width="50%" height="48"  align="left" bgcolor="#CCCCCC" style="background:#e8f3dc;"><li>People – such as technical support, management, administrators, operations teams, cashiers, telephone operators, etc.:</li></th>
          <th width="50%"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="20"  align="left" style="background:#e8f3dc;"><li>Processes – such as payment channels, business functions, etc.:</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="47"  align="left" style="background:#e8f3dc;"><li>How the results of the methods/processes were evaluated to verify that PCI DSS scope is appropriate:</li></th>
            <th  style="background:#ffffff;"><p>&nbsp;</p>
            <p>&nbsp;</p></th>
          </tr>
          <tr>
            <th height="34"  align="left" style="background:#e8f3dc;"><li>Technologies – such as e-commerce systems, internal network segments, DMZ segments, processor connections, POS systems, etc.:</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="41"  align="left" style="background:#e8f3dc;"><li>Locations/sites/stores – such as retail outlets, data centers, corporate office locations, call centers, etc.:</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="21"  align="left" style="background:#e8f3dc;"><li>Other details, if applicable:</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
  </thead>
</table>
<h3><em>3.3   Network segmentation</em></h3>
  <table width="100%">
    	<thead>
          <tr>
          <th width="50%" height="48"  align="left" bgcolor="#CCCCCC" style="background:#e8f3dc;"><li>Identify whether the assessed entity has used network segmentation to reduce the scope of the assessment. (yes/no)</li></th>
          <th width="50%"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="26"  align="left" style="background:#e8f3dc;"><li><em>If segmentation is not used</em>: Provide the name of the assessor who attests that the whole network has been included in the scope of the assessment.</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="47"  align="left" style="background:#e8f3dc;"><li><em>If segmentation is used</em>: Briefly describe how the segmentation is implemented.</li></th>
            <th  style="background:#ffffff;"><p>&nbsp;</p>
            <p>&nbsp;</p></th>
          </tr>
          <tr>
            <th height="34"  align="left" style="background:#e8f3dc;"><li>Identify the technologies used and any supporting processes</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            	<th height="20" colspan="2" rowspan="2" align="left" style="background:#e8f3dc; padding:5px;"><li>Explain how the assessor validated the effectiveness of the segmentation, as follows:</li></th>
         <tr>
            <th height="27"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="20"  align="left" style="background:#e8f3dc;"><li>Describe the methods used to validate the effectiveness of the segmentation (for example, observed configurations of implemented technologies, tools used, network traffic analysis, etc.).</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
        <tr>
            <th height="31"  align="left" style="background:#e8f3dc;"><li>Describe how it was verified that the segmentation is functioning as intended.</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
            <th height="20"  align="left" style="background:#e8f3dc;"><li>Describe how it was verified that adequate security controls are in place to ensure the integrity of the segmentation mechanisms (e.g., access controls, change management, logging, monitoring, etc.).</li></th>
            <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="20"  align="left" style="background:#e8f3dc;">Provide the name of the assessor who attests that the segmentation was verified to be adequate to reduce the scope of the assessment AND that the technologies/processes used to implement segmentation were included in the PCI DSS assessment. </th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>   
    </thead>
</table> 
<h3> <em>3.4 	Network segment details</em></h3>
<strong>Describe all networks that store, process and/or transmit CHD:</strong><br />
3><em>3.3   Network segmentation</em></h3>
<table width="100%">
    	<thead>
          <tr>
          <th  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0;padding-top:5px;">Network Name<br />
            (in scope)</th>
          <th  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0;padding-top:5px;"> Function/ Purpose of Network </th>
          </tr>
          <tr>
            <th width="24%" height="39"  align="left" style="background:#ffffff;"></th>
            <th width="76%"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="47"  align="left" style="background:#ffffff;"></th>
            <th  style="background:#ffffff;"><p>&nbsp;</p>
            <p>&nbsp;</p></th>
          </tr>
    </thead>
</table>
<h3>Describe all networks that do not store, process and/or transmit CHD, but are still in scope (e.g., connected to the CDE or provide management functions to the CDE):</h3>
<table width="100%">
    	<thead>
          <tr>
          <th  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;">Network Name<br />
            (in scope)</th>
          <th  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;"> Function/ Purpose of Network </th>
          </tr>
          <tr>
            <th width="24%" height="48"  align="left" style="background:#ffffff;"></th>
            <th width="76%"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="47"  align="left" style="background:#ffffff;"></th>
            <th  style="background:#ffffff;"><p>&nbsp;</p>
				<p>&nbsp;</p>
			</th>
          </tr>
    </thead>
</table>
  <h3><em>3.5	Connected entities for processing</em></h3>
<table width="100%">
    	<thead>
          <tr>
          <th width="45%"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;"><p>Identify All Processing Entities <br />
            (Acquirer/ Bank/ Brands directly connected to for processing)</p></th>
          <th width="55%"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;"><p>Description of any discussions/issues between the <br />
            QSA and Processing Entity on behalf of the <br />
            Assessed Entity for this PCI DSS Assessment (if any)</p></th>
          </tr>
           <tr>
          <th width="21%"  align="left" style="background:#ffffff;">&nbsp;</th>
          <th width="79%"  style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
     </thead>
</table>
  <h3>  <em>3.6	Other business entities that require compliance with the PCI DSS</em></h3>
    <p><strong>Entities wholly owned by the assessed entity that are required to comply with PCI DSS:     </strong></p>
    <p><em>(This may include subsidiaries, different brands, DBAs, etc.) </em></p>
     <table width="100%">
    	<thead>
        	
          <tr>
          <th width="36%" height="51" rowspan="2"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;"><p>Wholly Owned Entity Name</p>
            <p>&nbsp;</p></th>
          <th height="51" colspan="2"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;"><p>Reviewed:</p>
            <p>&nbsp;</p></th>
          </tr>
          <tr>
            <th width="32%" height="25"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;">As part of this assessment</th>
            <th width="32%"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;">Separately</th>
          </tr>
           <tr>
          <th width="36%"  align="left" style="background:#ffffff;">&nbsp;</th>
          <th  style="background:#ffffff;">&nbsp;</th>
          <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
       </thead>
</table> 
          
<h3> International entities owned by the assessed entity that are required to comply with PCI DSS:</h3>
         
         <table width="100%">
    	<thead>
        	
          <tr>
          <th width="41%" height="24"  align="center" bgcolor="#CCCCCC" style="background:#e8f3dc; padding-top:5px;"><p>List all countries where the entity conducts business.</p>
            <p>&nbsp;</p></th>
          <th height="51" colspan="2"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;"><p>Facilities in this country reviewed:</p>
            <p>&nbsp;</p></th>
          </tr>
          <tr>
            <th width="41%" height="25"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;">International Entity Name</th>
            <th width="27%" height="25"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;">As part of this assessment</th>
            <th width="32%"  align="center" valign="top" bgcolor="#CCCCCC" style="background:#c5e3c0; padding-top:5px;">Separately</th>
          </tr>
           <tr>
          <th width="41%"  align="left" style="background:#ffffff;">&nbsp;</th>
          <th  style="background:#ffffff;">&nbsp;</th>
          <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
       </thead>
</table>
<h3><em>3.7	Wireless summary</em></h3>
  <table width="100%">
    	<thead>
        	<tr>
             <th width="47%" height="40"  align="left" style="background:#e8f3dc;"><li>If there are no wireless networks or technologies in use, describe how this was verified by the assessor.</li></th>
             <th width="53%"  style="background:#ffffff;">&nbsp;</th>
           </tr>
        	<tr>
        	  <th height="105"  align="left" style="background:#e8f3dc;"><li>If there are wireless networks or technologies in use, identify and describe all wireless technologies in use that are connected to or could impact the security of the cardholder data environment. This would include:</li><br />
        	  <ul><li>  Wireless LANs</li><br />
        	    <li>Wireless payment applications (for example, POS terminals)</li><br />
       	      <li>All other wireless devices/technologies</li></ul></th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
       	  </tr>
    </thead>
</table>
  <h3>  <em>3.8	Wireless details</em></h3>
  <strong>For each wireless technology in scope, identify the following: </strong>
  <table width="100%">
    	<thead>
        	<tr>
             <th width="18%" height="40" rowspan="2"  align="center" valign="top" style="background:#c5e3c0; padding-top:5px;">Identified wireless<br />
              technology </th>
             <th height="28" colspan="3"  style="background:#c5e3c0;">For each wireless technology in scope, identify the following (yes/no):</th>
           </tr>
        	<tr>
        	  <th width="27%" height="59"  style="background:#c5e3c0;">Whether the technology is used to store, process or transmit CHD</th>
        	  <th width="26%"  style="background:#c5e3c0;"><p>Whether the technology is connected to or part of the CDE</p></th>
        	  <th width="29%"  style="background:#c5e3c0;">Whether the technology could impact the security of the CDE</th>
   	      </tr>
        	<tr>
        	  <th height="23"  align="left" style="background:#ffffff;"></th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
   	      </tr>
        	<tr>
        	  <th height="23"  align="left" style="background:#ffffff;"></th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
   	      </tr>
        	<tr>
        	  <th height="23"  align="left" style="background:#ffffff;"></th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
   	      </tr>
        	<tr>
        	  <th height="23"  align="left" style="background:#ffffff;"></th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
   	      </tr>
    </thead>
</table>
<h3>Wireless technology not in scope for this assessment:</h3>
 <table width="100%">
    	<thead>
        	<tr>
             <th width="33%" height="43"  align="center" valign="top" style="background:#c5e3c0; padding-top:5px;">Identified wireless technology<br />
              (not in scope)</th>
             <th width="67%" height="43" valign="bottom"  style="background:#c5e3c0;">Describe how the wireless technology was validated by the assessor to be not in scope</th>
           </tr>
           <tr>
        	  <th height="23"  align="left" style="background:#ffffff;"></th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
       	  </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;"></th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;"></th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;"></th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
   </thead>
</table>
 <h3>4.	Details about Reviewed Environment</h3>
 <h3><em>4.1	Detailed network diagram(s)</em></h3>
<p>Provide one or more<strong> <em>detailed diagrams</em></strong> to illustrate each communication/connection point between in scope networks/environments/facilities. Diagrams should include the following:</p>
<ul>
<li>All boundaries of the cardholder data environment</li><br />
<li>Any network segmentation points which are used to reduce scope of the assessment </li><br />
<li>Boundaries between trusted and untrusted networks</li><br />
<li>Wireless and wired networks</li><br />
<li>All other connection points applicable to the assessment</li>  
</ul>
<p>Ensure the diagram(s) include enough detail to clearly understand how each communication point functions and is secured. <em>(For example, the level of detail may include identifying the types of devices, device interfaces, network technologies, protocols, and security controls applicable to that communication point.)</em></p>
<p><strong>&lt;Insert detailed diagram(s)&gt;</strong><br />
</p>
<h3><em>4.2	Description of cardholder data flows</em></h3>

<table width="100%">
    	<thead>
        	<tr>
             <th width="20%" height="43"  align="center" valign="top" style="background:#c5e3c0; padding-top:5px;">Cardholder data flows</th>
             <th width="41%" height="43" valign="bottom"  style="background:#c5e3c0;">Types of CHD involved<br />
              (for example, full track, PAN, expiry)</th>
             <th width="39%" valign="bottom"  style="background:#c5e3c0;">Describe how cardholder data is transmitted and/or processed</th>
           </tr>
           <tr>
        	  <th height="23"  align="left" style="background:#ffffff;">Authorization</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
   	      </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">Capture</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">Settlement</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">Chargeback</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
            	<th height="27" colspan="3" align="left" style="background:#e8f3dc; padding:5px;"><li><em>Identify all other data flows, as applicable (add rows as needed)</em></li></th>
          <tr>
            <th height="34"  align="left" style="background:#ffffff;">Other (describe)</th>
           <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
              <tr>
             <th height="32"  align="left" style="background:#ffffff;">Other (describe)</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
  </thead>
</table>
<h3><em>4.3	Cardholder data storage</em></h3>
<p>Identify and list all databases, tables, and files storing cardholder data and provide the following details.</p><br />

<p><em><strong>Note: </strong>The table below list of files and tables that store cardholder data must be supported by an inventory created (or obtained from the client) and retained by the assessor in the work papers.</em></p>
<table width="100%">
    	<thead>
        	<tr>
             <th width="16%" height="97"  align="center" valign="middle" style="background:#c5e3c0; padding-top:5px;">Data Store<br />
              (file, table, etc.)</th>
             <th width="25%" height="97" valign="bottom"  style="background:#c5e3c0;">Cardholder data elements stored <br />
              (PAN, expiry, any elements of SAD)</th>
             <th width="31%" valign="bottom"  style="background:#c5e3c0;">How data is secured <br />
              (for example, use of encryption, access controls, truncation, etc.)</th>
             <th width="28%" valign="bottom"  style="background:#c5e3c0;">How access to data stores is logged <br />
              (description of logging mechanism used for logging access to data—for example, enterprise log management solution, application-level logging, operating system logging, etc.)</th>
           </tr>
           <tr>
        	  <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
        	  <th  style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
  </thead>
</table>
<h3><em>4.4	Critical hardware in use in the cardholder data environment</em></h3>
<p>Identify and list all types of hardware in the cardholder environment, including network components, servers and other mainframes, devices performing security functions, end-user devices (such as laptops and workstations), virtualized devices (if applicable) and any other critical hardware. For each item in the list, provide details for the hardware as indicated below. Add rows, as needed.</p>

<table width="100%">
    	<thead>
        	<tr>
             <th width="20%" height="34"  align="center" valign="middle" style="background:#c5e3c0; padding-top:5px;">Type of Device</th>
             <th width="32%" height="34" valign="middle"  style="background:#c5e3c0;">Vendor (make/model)</th>
             <th width="48%" valign="middle"  style="background:#c5e3c0;">Role/Functionality</th>
           </tr>
           <tr>
        	  <th height="23"  align="left" style="background:#e8f3dc;">&nbsp;</th>
        	  <th  style="background:#e8f3dc;">&nbsp;</th>
        	  <th  style="background:#e8f3dc;">&nbsp;</th>
       	  </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
  </thead>
</table>
<h3><em>4.5	Critical software in use in the cardholder data environment</em></h3>
<p>Identify and list all critical software in the cardholder environment, such as E-commerce applications, applications accessing CHD for non-payment functions (fraud modeling, credit verification, etc.), software performing security functions or enforcing PCI DSS controls, underlying operating systems that store, process or transmit CHD, system management software, virtualization management software, and other critical software. For each item in the list, provide details for the software as indicated below. Add rows, as needed.</p>
<table width="100%">
    	<thead>
        	<tr>
             <th width="21%" height="34"  align="center" valign="middle" style="background:#c5e3c0; padding-top:5px;">Name of Software Product</th>
             <th width="30%" height="34" valign="middle"  style="background:#c5e3c0;">Version or Release</th>
             <th width="49%" valign="middle"  style="background:#c5e3c0;">Role/Functionality</th>
           </tr>
           <tr>
        	  <th height="23"  align="left" style="background:#e8f3dc;">&nbsp;</th>
        	  <th  style="background:#e8f3dc;">&nbsp;</th>
        	  <th  style="background:#e8f3dc;">&nbsp;</th>
       	  </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="23"  align="left" style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
             <th  style="background:#e8f3dc;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23"  align="left" style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
  </thead>
</table>
           <h3><em>4.6	Sampling</em></h3>
<p>Identify whether sampling was used during the assessment.</p>
           <table width="100%">
    	<thead>
        	<tr>
             <th width="42%" height="19"  align="left" valign="middle" style="background:#c5e3c0; padding-top:5px;"><li>If sampling is not used:</li></th>
             <th width="58%" height="19" valign="middle"  style="background:#c5e3c0;">&nbsp;</th>
           </tr>
           <tr>
             <th height="52"  align="left" style="background:#e8f3dc;"><li>Provide the name of the assessor who attests that every system component and all business facilities have been assessed.</li></th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
        	<tr>
             <th width="42%" height="23"  align="left" valign="middle" style="background:#c5e3c0; padding-top:5px;"><li>If sampling is used:</li></th>
             <th height="23" valign="middle"  style="background:#c5e3c0;">&nbsp;</th>
           </tr>
            <tr>
             <th height="85"  align="left" style="background:#e8f3dc;"><li>Provide the name of the assessor who attests that all sample sets used for this assessment are represented in the below &quot;Sample sets for reporting&quot; table. Examples may include, but are not limited to firewalls, application servers, retail locations, data centers, User IDs, people, etc.</li></th>
             <th  style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
              <th height="67"  align="left" style="background:#e8f3dc;"><li>Describe the sampling rationale and/or standardized PCI DSS security and operational processes/controls used for selecting sample sizes (for people, processes, technologies, devices, locations/sites, etc.).</li></th>
              <th  style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="42"  align="left" style="background:#e8f3dc;"><li>Describe the standardized PCI DSS security and operational processes/control used to determine sample size.</li></th>
              <th  style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="23"  align="left" style="background:#e8f3dc;"><li>Describe how the above processes and controls were validated by the assessor.</li></th>
              <th  style="background:#ffffff;">&nbsp;</th>
            </tr>
           </thead>
           </table>
           <h3><em>4.7	Sample sets for reporting</em></h3>
<p><strong><em>Note:</em></strong><em> When a reporting instruction asks for a sample, the QSA may either refer to the Sample Set Identifier here (for example "Sample Set-1") OR list the sampled items individually in the response. Add rows as needed.
</em></p>
<table width="100%">
    	<thead>
        	<tr>
             <th width="12%" height="67"  align="center" valign="middle" style="background:#c5e3c0; padding-top:5px;">Sample Set <br />
              Reference Number</th>
             <th width="26%" height="67" valign="middle"  style="background:#c5e3c0;">Sample Type/ Description<br />
              (e.g., firewalls, datacenters, etc.)</th>
             <th width="37%" valign="middle"  style="background:#c5e3c0;">Listing of all components (devices, locations, etc.) of the Sample Set <br />
              (with make/model, as applicable)</th>
             <th width="13%" valign="middle"  style="background:#c5e3c0;">Total Sampled</th>
             <th width="12%" valign="middle"  style="background:#c5e3c0;">Total Population</th>
           </tr>
        	<tr>
        	  <th height="67" rowspan="3"  align="center" valign="top" style="background:#ffffff;">Sample Set-1</th>
        	  <th height="67" rowspan="3" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
      	  </tr>
        	<tr>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        	<tr>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        	<tr>
        	  <th height="67" rowspan="3"  align="center" valign="top" style="background:#ffffff;">Sample Set-2</th>
        	  <th height="67" rowspan="3" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
      	  </tr>
        	<tr>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        	<tr>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        	<tr>
        	  <th height="67" rowspan="3"  align="center" valign="top" style="background:#ffffff;">Sample Set-3</th>
        	  <th height="67" rowspan="3" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
      	  </tr>
        	<tr>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        	<tr>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        	<tr>
        	  <th height="67" rowspan="3"  align="center" valign="top" style="background:#ffffff;">Sample Set-4</th>
        	  <th height="67" rowspan="3" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
      	  </tr>
        	<tr>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        	<tr>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
           
  </thead>
</table>
          <h3> <em>4.8	Service providers and other third parties with which the entity shares cardholder data</em></h3>
          <p>For each service provider or third party, provide: </p>
          <p> <strong><em>Note</em></strong><em>: These entities are subject to PCI DSS Requirement 12.8.</em></p>
  <table width="100%">
    	<thead>
        	<tr>
             <th width="18%" height="67"  align="center" valign="middle" style="background:#c5e3c0; padding-top:5px;">Company Name</th>
             <th width="26%" height="67" valign="middle"  style="background:#c5e3c0;">What data is shared <br />
              (for example, PAN, expiry date, etc.)</th>
             <th width="32%" valign="middle"  style="background:#c5e3c0;">The purpose for sharing the data <br />
              (for example, third-party storage, transaction processing, etc.)</th>
             <th width="24%" valign="middle"  style="background:#c5e3c0;">Status of PCI DSS Compliance<br />
              (Date of AOC and version #)</th>
           </tr>
           <tr>
        	  <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
    </thead>
</table>
          <h3> <em>4.9	Third-party payment applications/solutions</em></h3>
          <p>Use the table on the following page to identify and list all third-party payment application products and version numbers in use, including whether each payment application has been validated according to PA-DSS or PCI P2PE. Even if a payment application has been PA-DSS or PCI P2PE validated, the assessor still needs to verify that the application has been implemented in a PCI DSS compliant manner and environment, and according to the payment application vendor's PA-DSS Implementation Guide for PA-DSS applications or P2PE Implementation Manual (PIM) and P2PE application vendor's P2PE Application Implementation Guide for PCI P2PE applications/solutions.
</p>
<p><strong><em>Note</em></strong><em>: It is not a PCI DSS requirement to use PA-DSS validated applications. Please consult with each payment brand individually to understand their PA-DSS compliance requirements.</em></p>
    <table width="100%">
    	<thead>
        	<tr>
             <th width="17%" height="67"  align="center" valign="middle" style="background:#c5e3c0; ">Name of Third-Party Payment Application/Solution</th>
             <th width="15%" height="67" valign="bottom"  style="background:#c5e3c0;">Version of Product</th>
             <th width="17%" valign="bottom"  style="background:#c5e3c0;">PA-DSS validated? <br />
              (yes/no)</th>
             <th width="11%" valign="bottom"  style="background:#c5e3c0;">P2PE validated?<br />
              (yes/no)</th>
             <th width="22%" valign="bottom"  style="background:#c5e3c0;">PCI SSC listing reference number</th>
            <th width="18%" valign="bottom"  style="background:#c5e3c0;">Expiry date of listing, if applicable</th>
          </tr>
          <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>


          </tr>
          <tr>
            <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="94" colspan="4" align="left" valign="middle"  style="background:#e8f3dc;"><li>Provide the name of the assessor who attests that all PA-DSS validated payment applications were reviewed to verify they have been implemented in a PCI DSS compliant manner according to the payment application vendor's PA-DSS implementation Guide</li></th>
            <th colspan="2" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="85" colspan="4" align="left" valign="middle"  style="background:#e8f3dc;"><li>Provide the name of the assessor who attests that all PCI SSC-validated P2PE applications and solutions were reviewed to verify they have been implemented in a PCI DSS compliant manner according to the P2PE application vendor's P2PE Application Implementation Guide and the P2PE solution vendor's P2PE Instruction Manual (PIM).</li></th>
            <th colspan="2" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="63" colspan="4" align="left" valign="middle"  style="background:#e8f3dc;"><li>For any of the above Third-Party Payment Applications and/or solutions that are not listed on the PCI SSC website, identify any being considered for scope reduction/exclusion/etc.</li> </th>
            <th colspan="2" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="31" colspan="4" align="left" valign="middle"  style="background:#e8f3dc;"><li>Any additional comments or findings assessor would like to share, as applicable:</li></th>
            <th colspan="2" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
      </thead>
</table> 
 <h3><em>4.10	Documentation reviewed</em></h3>  
<P>Identify and list all reviewed documents. Include the following: </P>    
       <table width="100%">
    	<thead>
        	<tr>
            
             <th width="11%" height="37" valign="bottom"  style="background:#c5e3c0;">Reference Number</th>
             <th width="35%" valign="bottom"  style="background:#c5e3c0;">Document Name <br />
              (including version, if applicable)</th>
             <th width="28%" valign="bottom"  style="background:#c5e3c0;">Brief description of document purpose</th>
            <th width="26%" valign="middle"  style="background:#c5e3c0;">Document date</th>
          </tr>
            <tr>
            <th height="23" align="left" valign="middle"  style="background:#ffffff;">Doc-1</th>
            <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
              <th height="20" align="left" valign="middle"  style="background:#ffffff;">Doc-2</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="20" align="left" valign="middle"  style="background:#ffffff;">Doc-3</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="20" align="left" valign="middle"  style="background:#ffffff;">Doc-4</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="20" align="left" valign="middle"  style="background:#ffffff;">Doc-5</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            </tr>
         </thead>
</table> 
 <h3><em>4.11	Individuals interviewed</em></h3> 
 <P>Identify and list the individuals interviewed. Include the following:</P>
 <table width="100%">
    	<thead>
        	<tr>
            
             <th width="10%" height="67" align="center" valign="middle"  style="background:#c5e3c0;"><p>Reference Number</p></th>
             <th width="17%" valign="middle"  style="background:#c5e3c0;">Employee Name</th>
             <th width="17%" valign="middle"  style="background:#c5e3c0;">Role/Job Title</th>
            <th width="15%" valign="middle"  style="background:#c5e3c0;">Organization</th>
              <th width="13%" valign="bottom"  style="background:#c5e3c0;">Is this person an ISA?<br />
              (yes/no)</th>
            <th width="28%" valign="middle"  style="background:#c5e3c0;">Summary of Topics Covered / Areas or Systems of Expertise<br />
              (high-level summary only)</th>
          </tr>
            <tr>
            <th height="20" align="left" valign="middle"  style="background:#ffffff;">Int-1</th>
            <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
              <th height="20" align="left" valign="middle"  style="background:#ffffff;">Int-2</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="20" align="left" valign="middle"  style="background:#ffffff;">Int-3</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="20" align="left" valign="middle"  style="background:#ffffff;">Int-4</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="20" valign="middle"  style="background:#ffffff;">&nbsp;</th>
            </tr>
            
   </thead>
</table>
<h3> <em>4.12	Managed service providers</em></h3>
<p>For managed service provider (MSP) reviews, the assessor must clearly identify which requirements in this document apply to the MSP (and are included in the review), and which are not included in the review and are the responsibility of the MSP's customers to include in their reviews. Include information about which of the MSP's IP addresses are scanned as part of the MSP's quarterly vulnerability scans, and which IP addresses are the responsibility of the MSP's customers to include in their own quarterly scans:</p>
  <table width="100%">
    	<thead>
        <tr>
            <th height="31" align="left" valign="middle"  style="background:#e8f3dc;"><li>Identify whether the entity being assessed is a managed service provider. (yes/no)</li></th>
            <th width="44%" colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        <tr>
       <th height="31" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><li>If &quot;yes&quot;:</li></th>
          </tr>
        <tr>
        <th height="31" align="left" valign="middle"  style="background:#e8f3dc;"><li>List the requirements that apply to the MSP and are included in this assessment.</li></th>
          <th colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        </tr>
        <tr>
          <th height="31" align="left" valign="middle"  style="background:#e8f3dc;"><li>List the requirements that are the responsibility of the MSP's customers (and have not been included in this assessment).</li></th>
          <th colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        </tr>
        <tr>
          <th height="48" align="left" valign="middle"  style="background:#e8f3dc;"><li>Provide the name of the assessor who attests that the testing of these requirements and/or responsibilities of the MSP is accurately represented in the signed Attestation of Compliance.</li></th>
          <th colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        </tr>
        <tr>
          <th height="31" align="left" valign="middle"  style="background:#e8f3dc;"><li>Identify which of the MSP's IP addresses are scanned as part of the MSP's quarterly vulnerability scans.</li></th>
          <th colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        </tr>
        <tr>
          <th height="31" align="left" valign="middle"  style="background:#e8f3dc;"><li>Identify which of the MSP's IP addresses are the responsibility of the MSP's customers.</li></th>
          <th colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        </tr> 
    </thead>
</table>      
   <h3><em>4.13	Disclosure summary for "In Place with Compensating Control" responses</em></h3>
<table width="100%">
    	<thead>
        <tr>
            <th width="58%" height="55" align="left" valign="middle"  style="background:#e8f3dc;"><li>Identify whether there were any responses indicated as &quot;In Place with Compensating Control.&quot; (yes/no)</li></th>
            <th width="42%" colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        <tr>
          <th height="31" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><li>If &quot;yes,&quot; complete the table below:</li></th>
          </tr>
  </thead>
</table><br />
          
 <table width="100%">
    	<thead>
        	<tr>
             <th width="51%" height="27"  align="center" valign="middle" style="background:#c5e3c0; padding-top:5px;">List of all requirements/tested procedures with this result</th>
             <th width="49%" valign="middle"  style="background:#c5e3c0;">Summary of the issue (legal obligation, etc.)</th>
           </tr>
           <tr>
        	  <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
       	  </tr>
           <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="22" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
    </thead>
</table> 
<h3><em>4.14	Disclosure summary for "Not Tested" responses</em></h3>
<table width="100%">
    	<thead>
        <tr>
            <th width="54%" height="34" align="left" valign="middle"  style="background:#e8f3dc;"><li>Identify whether there were any responses indicated as &quot;Not Tested&quot;: (yes/no)</li></th>
            <th width="46%" colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        <tr>
       <th height="31" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><li>If &quot;yes,&quot; complete the table below:</li></th>
          </tr>
  </thead>
</table><br />
<table width="100%">
    	<thead>
        	<tr>
             <th width="45%" height="89"  align="center" valign="middle" style="background:#c5e3c0; padding-top:5px;">List of all requirements/tested procedures with this result</th>
             <th width="55%" valign="middle"  style="background:#c5e3c0;">Summary of the issue <br />
              (for example, not deemed in scope for the assessment, reliance on a third-party service provider who is compliant to PCI DSS v2.0 and hasn't yet assessed against 3.0, etc.)</th>
          </tr>
           <tr>
        	  <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
       	  </tr>
           <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="22" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
    </thead>
</table>
<h3>5.	Quarterly Scan Results</h3>
<h3><em>5.1	Quarterly scan results – initial PCI DSS compliance validation</em></h3>
 <table width="100%">
    	<thead>
        <tr>
            <th width="65%" height="34" align="left" valign="middle"  style="background:#e8f3dc;"><li>Is this the assessed entity's initial PCI DSS compliance validation? (yes/no)
            </li></th>
            <th width="35%" colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
        <tr>
          <th height="34" colspan="2" align="left" valign="middle"  style="background:#ffffff;"> <br />
            <em><li>If &quot;yes,&quot; complete the remainder of Table 5.1 below.<br />
          If &quot;no,&quot; proceed to Table 5.2. </li></em></th>
          </tr>
        <tr>
          <th height="34" align="left" valign="middle"  style="background:#e8f3dc;"> <li>Identify how many external quarterly ASV scans were performed within the last 12 months:	</li></th>
          <th colspan="-1" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        </tr> 
        <tr>
          <th height="34" colspan="2" align="left" valign="middle"  style="background:#ffffff;"><li><em>Summarize</em> the four most recent quarterly ASV scan results in the Executive Summary as well as in comments at Requirement 11.2.2. </li><br />
           
            <em>Note</em>:<em> It is not required that four passing quarterly scans must be completed for initial PCI DSS compliance if the assessor verified:<br />
           <li> The most recent scan result was a passing scan,           </li><br />
           <li>The entity has documented policies and procedures requiring quarterly scanning going forward, and</li><br />
           
            <li>Any vulnerabilities noted in the initial scan have been corrected as shown in a re-scan.</li><br />
       <li>For subsequent years after the initial PCI DSS review, four passing quarterly scans must have occurred.</li></em></th>
          </tr>
        <tr>
          <th height="34" colspan="2" align="left" valign="middle"  style="background:#ffffff;"><li>For each quarterly ASV scan performed within the last 12 months, identify:</li></th>
        </tr> 
   </thead>
</table><br />
<table width="100%">
    	<thead>
        	<tr>
             <th width="30%" height="89"  align="center" valign="bottom" style="background:#c5e3c0; padding-top:5px;">Date of the scan(s)</th>
             <th width="35%" valign="middle"  style="background:#c5e3c0;">Were any vulnerabilities found that resulted in a failed initial scan?<br />
              (yes/no)</th>
             <th width="35%" valign="middle"  style="background:#c5e3c0;">For all scans resulting in a Fail, provide date(s) of re-scans showing that the vulnerabilities have been corrected</th>
          </tr>
           <tr>
        	  <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
   	      </tr>
           <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="22" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="39" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><li>Provide the name of the assessor who attests that the most recent scan result was verified to be a passing scan.</li></th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="35" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><li>Identify the name of the document the assessor verified to include the entity's documented policies and procedures requiring quarterly scanning going forward.</li></th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="42" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><li>Describe how the assessor verified any vulnerabilities noted in the initial scan have been corrected, as shown in a re-scan.</li></th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
    </thead>
</table>
<h3><em>5.2	Quarterly scan results – all other PCI DSS compliance validation</em></h3>     
<table width="100%">
    	<thead>
          <tr>
             <th height="46" align="left" valign="middle"  style="background:#e8f3dc;"><li>Identify whether this is the assessed entity's initial PCI DSS compliance validation. (yes/no)</li></th>
             <th width="36%" valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="42" colspan="2" align="left" valign="middle"  style="background:#ffffff;"><em><li>If &quot;yes,&quot; complete the remainder of Table 5.1 above.<br />
            If &quot;no,&quot; complete the table below.</li>
            </li></em></th>
          </tr>
        </thead>
</table>  <br />   
 <table width="100%">
    	<thead>
        	<tr>
             <th width="30%" height="41"  align="center" valign="bottom" style="background:#c5e3c0; padding-top:5px;">Date of the scan(s)</th>
             <th width="35%" valign="middle"  style="background:#c5e3c0;">Results of Scans<br />
              (Pass/Fail</th>
             <th width="35%" valign="middle"  style="background:#c5e3c0;">For all scans resulting in a Fail, provide date(s) of re-scans showing that the vulnerabilities have been corrected</th>
          </tr>
           <tr>
        	  <th height="34" valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
        	  <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
   	      </tr>
           <tr>
             <th height="28" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="31" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="23" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="middle"  style="background:#e8f3dc;">Assessor comments, if applicable:</th>
             <th colspan="2" valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>
   </thead>
</table>    
<h3><em>5.3	Attestations of scan compliance</em></h3>  
<p>Scan must cover all externally accessible (Internet-facing) IP addresses in existence at the entity, in accordance with the <em>PCI DSS Approved Scanning Vendors (ASV) Program Guide.</em></p>
<table width="100%">
    	<thead>
           <tr>
             <th width="42%" height="26" align="left" valign="middle"  style="background:#e8f3dc;">Provide the name of the assessor who attests that the ASV and the entity have completed the Attestations of Scan Compliance confirming that all externally accessible (Internet-facing) IP addresses in existence at the entity were appropriately scoped for the ASV scans:</th>
             <th width="58%" colspan="2" valign="middle"  style="background:#ffffff;">&nbsp;</th>
           </tr>  
  </thead>
</table>
<p><strong>6. 	Findings and Observations
    </strong></p>
<p><strong>Build and Maintain a Secure Network and Systems </strong></p>
<em><strong>Requirement 1: 	Install and maintain a firewall configuration to protect cardholder data </strong></em><strong></strong>
<table width="100%">
    	<thead>
           <tr>
             <th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
          </tr>
           <tr>
             <th valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
           <tr>
             <th colspan="8" align="left" valign="middle"  style="background:#e8f3dc;">1.1 Establish and implement firewall and router configuration standards that include the following:</th>
           </tr>
           <tr>
             <th colspan="8" align="left" valign="middle"  style="background:#e8f3dc;">1.1 Inspect the firewall and router configuration standards and other documentation specified below and verify that standards are complete and implemented as follows:</th>
           </tr>
           <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"> 1.1.1 A formal process for approving and testing all network connections and changes to the firewall and router configurations.   </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>  
  </thead>
</table>
    <table width="100%">
    	<thead>
           <tr>
             <th width="23%" rowspan="3" align="left" valign="middle"  style="background:#ffffff;">1.1.1.a Examine documented procedures to verify there is a formal process for testing and approval of all:<br />
               <li>Network connections, and </li>
             <li>Changes to firewall and router configurations.</li></th>
             <th colspan="7" align="left" valign="middle"  style="background:#ffffff;">Identify the document(s) reviewed to verify procedures define the formal processes for:</th>
          </tr>
           <tr>
             <th width="39%" height="26" align="left" valign="top"  style="background:#ffffff;"><li>Testing and approval of all network connections</li></th>
             <th width="39%" align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Testing and approval of all changes to firewall and router configurations.</li> </th>
             <th width="39%" align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th rowspan="5" align="left" valign="middle"  style="background:#ffffff;">1.1.1.b For a sample of network connections, interview responsible personnel and examine records to verify that network connections were approved and tested.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of records for network connections that were examined</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="29" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm that network connections were approved and tested.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" colspan="7" align="left" valign="middle"  style="background:#ffffff;"> Describe how change records were compared to actual changes made to firewall and router configurations to verify the changes were:<br /></th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Approved</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Tested</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
           <tr>
             <th colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"> 1.1.2 Current diagram that identifies all connections between the cardholder data environment and other networks, including any wireless networks.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>  
          <tr>
             <th width="23%" rowspan="5" align="left" valign="middle"  style="background:#ffffff;">1.1.2.a Examine diagram(s) and observe network configurations to verify that a current network diagram exists and that it documents all connections to the cardholder data environment, including any wireless networks.</th>
             <th colspan="5" align="left" valign="middle"  style="background:#ffffff;">Identify the current network diagram(s) examined.</th>
             <th valign="middle"  style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">
Describe how network connections were observed and compared to the diagram(s) to verify that the diagram: 
            </th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Is current</li></th>
             <th width="39%" align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Includes all connections to cardholder data.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Includes any wireless network connections.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">1.1.2.b Interview responsible personnel to verify that the diagram is kept current.</th>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document examined to verify processes require that the network diagram is kept current.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to verify that the diagram is kept current.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"> 1.1.3 Current diagram that shows all cardholder data flows across systems and networks.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>  
          <tr>
          <th rowspan="5" align="left" valign="middle"  style="background:#ffffff;">1.1.3.a Examine data flow diagram and interview personnel to verify the diagram:
            <li>Shows all cardholder data flows across systems and networks.</li>
          <li> Is kept current and updated as needed upon changes to the environment.</li></th>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document examined to verify processes require that the network diagram is kept current.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="33" colspan="6" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to verify that the diagram is kept current.</li></th>
          </tr>
           <tr>
             <th height="33" align="left" valign="top"  style="background:#ffffff;"><li>Shows all cardholder data flows across systems and networks</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="33" align="left" valign="top"  style="background:#ffffff;"><li>Is kept current and updated as needed upon changes to the environment.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"> 1.1.4 Requirements for a firewall at each Internet connection and between any demilitarized zone (DMZ) and the internal network zone.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr> 
           <tr>
				<th  align="left" valign="middle"  style="background:#ffffff;">1.1.4.a Examine the firewall configuration standards and verify that they include requirements for a firewall at each Internet connection and between any DMZ and the internal network zone.</th>
             <th height="28" align="left" valign="top"  style="background:#ffffff;">
				<li>Identify the firewall configuration standards document examined to verify requirements for a firewall:</li>
				<li>At each Internet connection.</li>
				<li>Between any DMZ and the internal network zone.</li>
			 </th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">1.1.4.b Verify that the current network diagram is consistent with the firewall configuration standards.</th>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Provide the name of the assessor who attests that the current network diagram identified at 1.1.2.a was compared to the firewall configuration standards identified at 1.1.4.a to verify they are consistent with each other.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th rowspan="3"  align="left" valign="middle"  style="background:#ffffff;">1.1.4.c Observe network configurations to verify that a firewall is in place at each Internet connection and between any demilitarized zone (DMZ) and the internal network zone, per the documented configuration standards and network diagrams.</th>
             <th height="28" colspan="6" align="left" valign="top"  style="background:#ffffff;">Describe how network configurations were observed to verify that, per the documented configuration standards and network diagrams, a firewall is in place:</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>At each Internet connection.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Between any DMZ and the internal network zone.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"> 1.1.4 Requirements for a firewall at each Internet connection and between any demilitarized zone (DMZ) and the internal network zone.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th colspan="2" align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr> 
          <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">1.1.5.a Verify that firewall and router configuration standards include a description of groups, roles, and responsibilities for management of network components.</th>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the firewall and router configuration standards document(s) reviewed to verify they include a description of groups, roles and responsibilities for management of network components.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th rowspan="2"  align="left" valign="middle"  style="background:#ffffff;">1.1.5.b Interview personnel responsible for management of network components to confirm that roles and responsibilities are assigned as documented.</th>
            <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel responsible for management of network components interviewed for this testing procedure.</li></th>
            <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to verify that roles and responsibilities are assigned as documented for management of firewall and router components.</li></th>
            <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><p>1.1.6 Documentation and business justification for use of all services, protocols, and ports allowed,  including documentation of security features implemented for those protocols considered to be insecure.<br />
               <em>Examples of insecure services, protocols, or ports include but are not limited to FTP, Telnet, POP3, IMAP, and SNMP v1 and v2.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr> 
           <tr>
             <th rowspan="2"  align="left" valign="middle"  style="background:#ffffff;">1.1.6.a Verify that firewall and router configuration standards include a documented list of all services, protocols and ports, including business justification for each—for example, hypertext transfer protocol (HTTP) and Secure Sockets Layer (SSL), Secure Shell (SSH), and Virtual Private Network (VPN) protocols.</th>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the firewall configuration standards document(s) reviewed to verify the document(s) contains a list of all services, protocols and ports necessary for business, including a business justification for each.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the router configuration standards document(s) reviewed to verify the document contains a list of all services, protocols and ports necessary for business, including a business justification for each.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th rowspan="4"  align="left" valign="middle"  style="background:#ffffff;">1.1.6.b Identify insecure services, protocols, and ports allowed; and verify that security features are documented for each service.</th>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether any insecure services, protocols or ports are allowed. (yes/no)</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" colspan="6" align="left" valign="top"  style="background:#ffffff;"> <br />
             <em>If &quot;yes,&quot; complete the instructions below for EACH insecure service, protocol, and port allowed: (add rows as needed)</em><br /></th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented justification.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the firewall and router configuration standards reviewed to verify that security features are documented for each insecure service/protocol/port.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th rowspan="2"  align="left" valign="middle"  style="background:#ffffff;">1.1.6.c Examine firewall and router configurations to verify that the documented security features are implemented for each insecure service, protocol, and port.</th>
             <th height="28" colspan="6" align="left" valign="top"  style="background:#ffffff;"><em>If &quot;yes&quot; at 1.1.6.b, complete the following for each insecure service, protocol, and/or port present (add rows as needed):</em></th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the firewall and router configurations were examined to verify that the documented security features are implemented for each insecure service, protocol and/or port.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;">
			 <p>1.1.7 Requirement to review firewall and router rule sets at least every six months</p>
              <p>&nbsp;</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr> 
           <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">
				<p>&nbsp;</p>
				<p>1.1.7.a Verify that firewall and router configuration standards require review of firewall and router rule sets at least every six months.</p>
			</th>
            <th height="28" align="left" valign="top"  style="background:#ffffff;">
				<p>
					<li>Identify the firewall and router configuration standards reviewed to verify they require a review of firewall rule sets at least every six months.</li>
				</p>
			</th>
            <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th rowspan="3"  align="left" valign="middle"  style="background:#ffffff;">1.1.7.b Examine documentation relating to rule set reviews and interview responsible personnel to verify that the rule sets are reviewed at least every six months.</th>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document(s) relating to rule set reviews that were examined to verify that rule sets are reviewed at least every six months for firewall and router rule sets.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" colspan="6" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm that rule sets are completed at least every six months:</li></th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm that rule sets are reviewed at least every six months for firewall and router rule sets.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="54" colspan="7" align="left" valign="middle"  style="background:#e8f3dc;"><p>1.2 Build firewall and router configurations that restrict connections between untrusted networks and any system components in the cardholder data environment.<br />
               <em>Note: An &quot;untrusted network&quot; is any network that is external to the networks belonging to the entity under review, and/or which is out of the entity's ability to control or manag</em>e.</p>
              <p>&nbsp;</p></th>                            
          </tr> 
           <tr>
             <th height="54" colspan="7" align="left" valign="middle"  style="background:#e8f3dc;"><p>1.2 Examine firewall and router configurations and perform the following to verify that connections are restricted between untrusted networks and system components in the cardholder data environment:</p>
             <p>&nbsp;</p></th> 
          </tr> 
            <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><p>1.2.1 Restrict inbound and outbound traffic to that which is necessary for the cardholder data environment, and specifically deny all other traffic.</p>
              <p>&nbsp;</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr> 
           <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">
				<p>&nbsp;</p>
				<p>1.2.1.a	 Examine firewall and router configuration standards to verify that they identify inbound and outbound traffic necessary for the cardholder data environment.</p>
			 </th>
             <th height="28" align="left" valign="top"  style="background:#ffffff;">
				<p>
					<li>Identify the firewall and router configuration standards reviewed to verify they identify inbound and outbound traffic necessary for the cardholder data environment.</li>
				</p>
			 </th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th rowspan="3"  align="left" valign="middle"  style="background:#ffffff;">1.2.1.b Examine firewall and router configurations to verify that inbound and outbound traffic is limited to that which is necessary for the cardholder data environment.</th>
             <th height="28" colspan="6" align="left" valign="top"  style="background:#ffffff;"><li>Describe how firewall and router configurations were examined to verify that the following traffic is limited to that which is necessary for the cardholder data environment:</li></th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>Inbound traffic</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;">
			 <li>Outbound traffic</li>
			 </th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th rowspan="3"  align="left" valign="middle"  style="background:#ffffff;">1.2.1.c Examine firewall and router configurations to verify that all other inbound and outbound traffic is specifically denied, for example by using an explicit &quot;deny all&quot; or an implicit deny after allow statement.</th>
             <th height="28" colspan="6" align="left" valign="top"  style="background:#ffffff;">Describe how firewall and router configurations were examined to verify the following is specifically denied:</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>All other inbound traffic</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="top"  style="background:#ffffff;"><li>All other outbound traffic</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;">
			 <p>1.2.2 Secure and synchronize router configuration files.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr> 
            <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.2.2.a Examine router configuration files to verify they are secured from unauthorized access.</p></th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			 <p><li>Describe how router configuration files were examined to verify they are secured from unauthorized access.</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
              <th  align="left" valign="middle"  style="background:#ffffff;">
			  <p>1.2.2.b Examine router configurations to verify they are synchronized—for example, the running (or active) configuration matches the start-up configuration (used when machines are booted).</p></th>
              <th height="28" align="left" valign="top"  style="background:#ffffff;">
			  <li>Describe how router configuration files were examined to verify they are synchronized.</li></th>
              <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;">
			 <p>1.2.3 Install perimeter firewalls between all wireless networks and the cardholder data environment, and configure these firewalls to deny or, if traffic is necessary for business purposes, permit only authorized traffic between the wireless environment and the cardholder data environment.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
            <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.2.3.a Examine firewall and router configurations to verify that there are perimeter firewalls installed between all wireless networks and the cardholder data environment.</p></th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			 <p><li>Describe how firewall and router configurations were examined to verify perimeter firewalls are in place between all wireless networks and the cardholder data environment.</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
              <th rowspan="5"  align="left" valign="middle"  style="background:#ffffff;">
			  <p>1.2.3.b Verify that the firewalls deny or, if traffic is necessary for business purposes, permit only authorized traffic between the wireless environment and the cardholder data environment.</p></th>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			  <li>Identify whether traffic between the wireless environment and the cardholder data environment is necessary for business purposes. (yes/no)</li></th>
              <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;">If &quot;no&quot;:</th>
              <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;">Describe how firewall and/or router configurations were observed to verify firewalls deny all traffic from any wireless environment into the cardholder environment.</th>
              <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;">If &quot;yes&quot;:</th>
              <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Describe how firewall and/or router configurations were observed to verify firewalls permit only authorized traffic from any wireless environment into the cardholder environment.</li></th>
              <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
             <th height="95" colspan="7" align="left" valign="middle"  style="background:#e8f3dc;"><p> <br />
               1.3 Prohibit direct public access between the Internet and any system component in the cardholder data environment. <br />
             </p>
             <p>&nbsp;</p></th> 
          </tr> 
            <tr>
             <th height="54" colspan="7" align="left" valign="middle"  style="background:#e8f3dc;"><p> <br />
               1.3 Examine firewall and router configurations—including but not limited to the choke router at the Internet, the DMZ router and firewall, the DMZ cardholder segment, the perimeter router, and the internal cardholder network segment—and perform the following to determine that there is no direct access between the Internet and system components in the internal cardholder network segment:<br />
             </p>
             <p>&nbsp;</p></th> 
          </tr> 
           <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><p>1.3.1 Implement a DMZ to limit inbound traffic to only system components that provide authorized publicly accessible services, protocols, and ports.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
           <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.3.1 Examine firewall and router configurations to verify that a DMZ is implemented to limit inbound traffic to only system components that provide authorized publicly accessible services, protocols, and ports.a environment.</p></th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			 <p><li>Describe how the firewall and router configurations were examined to verify that the DMZ is implemented to limit inbound traffic to only system components that provide authorized publicly accessible services, protocols, and ports.</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><p> <br />
               1.3.2 Limit inbound Internet traffic to IP addresses within the DMZ. <br />
             </p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
          <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.3.2 Examine firewall and router configurations to verify that inbound Internet traffic is limited to IP addresses within the DMZ.</p></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			<p><li>Describe how the firewall and router configurations were examined to verify that configurations limit inbound Internet traffic to IP addresses within the DMZ. </li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><p> <br />
               1.3.3 Do not allow any direct connections inbound or outbound for traffic between the Internet and the cardholder data environment.<br />
             </p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
          <tr>
             <th rowspan="3"  align="left" valign="middle"  style="background:#ffffff;"><p>1.3.3 Examine firewall and router configurations to verify direct connections inbound or outbound are not allowed for traffic between the Internet and the cardholder data environment.</p></th>
            <th height="28" colspan="6" align="left" valign="middle"  style="background:#ffffff;">Describe how the firewall and router configurations were examined to verify that configurations limit inbound Internet traffic to IP addresses within the DMZ. </th>
          </tr>
          <tr>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Inbound</li></th>
            <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Outbound</li></th>
            <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><p>1.3.4 Implement anti-spoofing measures to detect and block forged source IP addresses from entering the network.<br />
               <em>(For example, block traffic originating from the Internet with an internal source address)</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
            <tr>
             <th rowspan="2"  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.3.4 Examine firewall and router configurations to verify that anti-spoofing measures are implemented, for example internal addresses cannot pass from the Internet into the DMZ.</p></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			<p><li>Describe how firewall and router configurations were examined to verify that anti-spoofing measures are implemented.</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			 <p><li>Describe the anti-spoofing measures implemented</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
          <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;">
			 <p>1.3.5 Do not allow unauthorized outbound traffic from the cardholder data environment to the Internet.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
            <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.3.5 Examine firewall and router configurations to verify that outbound traffic from the cardholder data environment to the Internet is explicitly authorized.</p></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			<p><li>Describe how firewall and router configurations were examined to verify that outbound traffic from the cardholder data environment to the Internet is explicitly authorized.</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;"><p>1.3.6 Implement stateful inspection, also known as dynamic packet filtering. (That is, only &quot;established&quot; connections are allowed into the network.)</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
            <tr>
             <th rowspan="2"  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.3.6 Examine firewall and router configurations to verify that the firewall performs stateful inspection (dynamic packet filtering). (Only established connections should </p></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			<p><li>Describe how firewall and router configurations were examined to verify that the firewall performs stateful inspection.res are implemented.</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			 <p><li>Describe how observed firewall configurations implement stateful inspection</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;">
			 <p>1.3.7 Place system components that store cardholder data (such as a database) in an internal network zone, segregated from the DMZ and other untrusted networks. </p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
           <tr>
             <th rowspan="3"  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.3.7 Examine firewall and router configurations to verify that system components that store cardholder data are on an internal network zone, segregated from the DMZ and other untrusted networks. authorized.</p></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			<p><li>Identify whether any system components store cardholder data. (yes/no)</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="28" colspan="6" align="left" valign="middle"  style="background:#ffffff;">If &quot;yes&quot;:</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Describe how firewall and router configurations were examined to verify that the system components that store cardholder data are located on an internal network zone, and are segregated from the DMZ and other untrusted networks.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;">
			 <p>1.3.8 Do not disclose private IP addresses and routing information to unauthorized parties.             
               </p><br />
                 <em>Note: Methods to obscure IP addressing may include, but are not limited to:</em><br />
               <li><em>Network Address Translation (NAT),</em></li>
               <li><em> Placing servers containing cardholder data behind proxy servers/firewalls,</em></li> 
               <li><em> Removal or filtering of route advertisements for private networks that employ registered addressing,</em></li>
               <li><em> Internal use of RFC1918 address space instead of registered addresses.</em></li>
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
            <tr>
             <th rowspan="2"  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.3.8.a Examine firewall and router configurations to verify that methods are in place to prevent the disclosure of private IP addresses and routing information from internal networks to the Internet. </p></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			<p><li>Describe the methods in place to prevent the disclosure of private IP addresses and routing information from internal networks to the Internet.</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Describe how firewall and router configurations were examined to verify that methods are in place to prevent the disclosure of private IP addresses and routing information from internal networks to the Internet</li></th>
              <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th rowspan="2"  align="left" valign="middle"  style="background:#ffffff;">1.3.8.b Interview personnel and examine documentation to verify that any disclosure of private IP addresses and routing information to external entities is authorized.</th>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify the document reviewed that specifies whether any disclosure of private IP addresses and routing information to external parties is permitted.</li></th>
              <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>For each permitted disclosure, identify the responsible personnel interviewed who confirm that the disclosure is authorized.</li></th>
              <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
            </tr>
              <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;">
			 <p>1.4 Install personal firewall software on any mobile and/or employee-owned devices that connect to the Internet when outside the network (for example, laptops used by employees), and which are also used to access the network. Firewall configurations include:  </p>           
               <li> <em>Specific configuration settings are defined for personal firewall software.</em> </li><br />
<li><em>Personal firewall software is actively running</em></li> <br/>
               
               <li><em> Personal firewall software is not alterable by users of mobile and/or employee-owned devices</em></li> 
              
              </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
           <tr>
             <th rowspan="3"  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.4.a Examine policies and configuration standards to verify:</p><br />
               <li>Personal firewall software is required for all mobile and/or employee-owned devices that connect to the Internet (for example, laptops used by employees) when outside the network, and which are also used to access the network.</li> <br />
             <li>  Specific configuration settings are defined for personal firewall software. </li><br />
              <li>Personal firewall software is configured to actively run.</li> <br />
               <li>Personal firewall software is configured to not be alterable by users of mobile and/or employee-owned devices.  </li>             
            </th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			<p><li>Identify whether mobile and/or employee-owned computers with direct connectivity to the Internet are used to access the organization's network. (yes/no)</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			 <p><li><em>If &quot;no,&quot;</em> identify the document reviewed that explicitly prohibits mobile and/or employee-owned computers with direct connectivity to the Internet from being used to access the organization's network</li></p></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
              <li><em>If &quot;yes,&quot;</em> identify the documented policies and configuration standards that define the following:</li>              
              <li>personal firewall software is required for all mobile and/or employee-owned devices that connect to the Internet when outside the network, and which are also used to access the network. </li><br />
                <li>Specific configuration settings are defined for personal firewall software. </li><br />
               <li> Personal firewall software is configured to actively run.</li> <br />
             <li> Personal firewall software is configured to not be alterable by users of mobile and/or employee-owned devices.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th rowspan="5"  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.4.b Inspect a sample of mobile and/or employee-owned devices to verify that:</p><br />
              <li> Personal firewall software is installed and configured per the organization's specific configuration settings.</li><br />
               <li>Personal firewall software is actively running.</li><br />
             <li>Personal firewall software is not alterable by users of mobile and/or employee-owned devices.</li></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			<li>Identify the sample of mobile and/or employee-owned devices selected for this testing procedure.</li> 
			</th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="28" colspan="6" align="left" valign="middle"  style="background:#ffffff;">
			 <p>Describe how the sample of mobile and/or employee-owned devices was inspected to verify that personal firewall software is:</p></th>
          </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			 <li>Installed and configured per the organization's specific configuration settings</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Actively running.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			 <li>Not alterable by users of mobile and/or employee-owned devices.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="54" colspan="2" align="left" valign="middle"  style="background:#e8f3dc;">
			 <p>1.5 Ensure that security policies and operational procedures for managing firewalls are documented, in use, and known to all affected parties.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
           <tr>
             <th rowspan="2"  align="left" valign="middle"  style="background:#ffffff;">
			 <p>1.5 Examine documentation and interview personnel to verify that security policies and operational procedures for managing firewalls are:</p><br />
              <li> Documented,</li> <br />
              <li> In use, and</li> <br />
            <li> Known to all affected parties.</li></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;">
	        <li>Identify the document reviewed to verify that security policies and operational procedures for managing firewalls are documented.</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;">
			 <li>Identify responsible personnel interviewed who confirm that the above documented security policies and operational procedures for managing firewalls are:</li><br />
               <li>In use</li><br />
             <li>Known to all affected parties</li></th>
             <th align="left" valign="top" colspan="5" style="background:#ffffff;">&nbsp;</th>
           </tr>
        </thead>
</table>
          
<h3><em>Requirement 2:	Do not use vendor-supplied defaults for system passwords and other security parameters</em></h3>
 <table>
 <thead>
 <tr>
             <th width="341" height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th width="225" rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th width="149" rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
    </tr>
           <tr>
             <th width="76" valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th width="91" valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th width="40" valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th width="50" valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th width="74" valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
          <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.1 Always change vendor-supplied defaults and remove or disable unnecessary default accounts before installing a system on the network.</p>
               <p><br />
               <em>This applies to ALL default passwords, including but not limited to those used by operating systems, software that provides security services, application and system accounts, POS terminals, Simple Network Management Protocol (SNMP) community strings, etc.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr> 
            <tr>
             <th rowspan="3"  align="left" valign="middle"  style="background:#ffffff;"><p>2.1.a Choose a sample of system components, and attempt to log on (with system administrator help) to the devices and applications using default vendor-supplied accounts and passwords, to verify that ALL default passwords (including those on operating systems, software that provides security services, application and system accounts, POS terminals, and Simple Network Management Protocol (SNMP) community strings) have been changed. (Use vendor manuals and sources on the Internet to find vendor-supplied accounts/passwords.) </p>               <p>&nbsp;</p>               <p>&nbsp;</p></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;"><p>
              <li>Identify the sample of system components selected.</th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><p>
              <li>Identify the vendor manuals and sources on the Internet used to find vendor-supplied accounts/passwords.</th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><p>
              <li>For each item in the sample, describe how attempts to log on (with system administrator help) to the sample of devices and applications using default vendor-supplied accounts and passwords were performed to verify that all default passwords have been changed.</th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
          </tr>
            <tr>
             <th rowspan="3"  align="left" valign="middle"  style="background:#ffffff;"><p>2.1.b For the sample of system components, verify that all unnecessary default accounts (including accounts used by operating systems, security software, applications, systems, POS terminals, SNMP, etc.) are removed or disabled.</p></th>
            <th height="28" colspan="7" align="left" valign="middle"  style="background:#ffffff;"><p>For each item in the sample of system components indicated at 2.1.a, describe how all unnecessary default accounts were verified to be either:</th>
          </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Removed</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Disabled</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th rowspan="5"  align="left" valign="middle"  style="background:#ffffff;">2.1.c Interview personnel and examine supporting documentation to verify that:<br />
               <li> All vendor defaults (including default passwords on operating systems, software providing security services, application and system accounts, POS terminals, Simple Network Management Protocol (SNMP) community strings, etc.) are changed before a system is installed on the network.</li>
                <br />
              <li>Unnecessary default accounts (including accounts used by operating systems, security software, applications, systems, POS terminals, SNMP, etc.) are removed or disabled before a system is installed on the network.</li></th>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who verify that:</li><br />
               <li> All vendor defaults (including default passwords on operating systems, software providing security services, application and system accounts, POS terminals, Simple Network Management Protocol (SNMP) community strings, etc.) are changed before a system is installed on the network.</li><br />
             <li> Unnecessary default accounts (including accounts used by operating systems, security software, applications, systems, POS terminals, SNMP, etc.) are removed or disabled before a system is installed on the network.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify supporting documentation examined for this testing procedure.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="28" colspan="7" align="left" valign="middle"  style="background:#ffffff;">Describe how the supporting documentation was examined to verify that:</th>
            </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>All vendor defaults are changed before a system is installed on the network</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Unnecessary default accounts are removed or disabled before a system is installed on the network.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  
             <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.1.1 For wireless environments connected to the cardholder data environment or transmitting cardholder data, change ALL wireless vendor defaults at installation, including but not limited to default wireless encryption keys, passwords, and SNMP community strings.<em>.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr> 
           <tr>
             <th rowspan="7"  align="left" valign="middle"  style="background:#ffffff;">2.1.1.a Interview responsible personnel and examine supporting documentation to verify that:<br />
              <li> Encryption keys were changed from default at installation</li> <br />
            <li> Encryption keys are changed anytime anyone with knowledge of the keys leaves the company or changes positions.</li></th>
            <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify whether there are wireless environments connected to the cardholder data environment or transmitting cardholder data. (yes/no)</li><br />
             <em>If "no," mark 2.1.1 as "Not Applicable" and proceed to 2.2.</em></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
          </tr>
           <tr>
             <th height="28" colspan="7" align="left" valign="middle"  style="background:#ffffff;"><em>If &quot;yes&quot;:</em></th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who verify that encryption keys are changed:</li><br />
             <li>From default at installation</li><br />
             <li>Anytime anyone with knowledge of the keys leaves the company or changes positions.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify supporting documentation examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" colspan="7" align="left" valign="middle"  style="background:#ffffff;"> <br />
             Describe how the supporting documentation was examined to verify that encryption keys are changed: <br /></th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>From default at installation</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Anytime anyone with knowledge of the keys leaves the company or changes positions.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th rowspan="2"  align="left" valign="middle"  style="background:#ffffff;">2.1.1.b Interview personnel and examine policies and procedures to verify: <br />
            <li>   Default SNMP community strings are required to be changed upon installation.</li><br />
             <li>Default passwords/phrases on access points are required to be changed upon installation.</li></th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who verify that: </li><br />
             <li>Default SNMP community strings are required to be changed upon installation.</li><br />
             <li>Default passwords/phrases on access points are required to be changed upon installation.<br />
             </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify policies and procedures examined to verify that: </li><br />
             <li>Default SNMP community strings are required to be changed upon installation.</li><br />
             <li>Default passwords/phrases on access points are required to be changed upon installation.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th rowspan="4"  align="left" valign="middle"  style="background:#ffffff;">2.1.1.c Examine vendor documentation and login to wireless devices, with system administrator help, to verify: <br />
               Default SNMP community strings are not used.<br />
             Default passwords/passphrases on access points are not used.</th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify vendor documentation examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
           <tr>
             <th height="28" colspan="7" align="left" valign="middle"  style="background:#ffffff;">Describe how examined vendor documentation was used to attempt to login to wireless devices (with system administrator help) to verify:</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Default SNMP community strings are not used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Default passwords/passphrases on access points are not used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
           <tr>
             <th rowspan="4"  align="left" valign="middle"  style="background:#ffffff;"><p>2.1.1.d Examine vendor documentation and observe wireless configuration settings to verify firmware on wireless devices is updated to support strong encryption for: </p>
              
               <li> Authentication over wireless networks</li><br />
             <li>Transmission over wireless networks</li></th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify vendor documentation examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
           <tr>
             <th height="28" colspan="7" align="left" valign="middle"  style="background:#ffffff;">Describe how wireless configuration settings were observed with examined vendor documentation to verify that firmware on wireless devices is updated to support strong encryption for:</th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Authentication over wireless networks.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
           <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Transmission over wireless networks.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
           <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify vendor documentation examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
           <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">2.1.1.e Examine vendor documentation and observe wireless configuration settings to verify other security-related wireless vendor defaults were changed, if applicable.</th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Describe how wireless configuration settings were observed with examined vendor documentation to verify other security-related wireless vendor defaults were changed, if applicable.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
              <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.2 Develop configuration standards for all system components. Assure that these standards address all known security vulnerabilities and are consistent with industry-accepted system hardening standards.              
               <p>Sources of industry-accepted system hardening standards may include, but are not limited to:
               <li>Center for Internet Security (CIS) </li>
               <br />
<li>International Organization for Standardization (ISO)</li> 
               <em><br />
               </em>
               <li>SysAdmin Audit Network Security (SANS) Institute</li><br />
               <li>National Institute of Standards Technology (NIST)</li> 
              
              </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
            <tr>
             <th  align="left" valign="middle"  style="background:#ffffff;">2.2.a Examine the organization's system configuration standards for all types of system components and verify the system configuration standards are consistent with industry-accepted hardening standards.</th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify the documented system configuration standards for all types of system components examined.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
             <tr>
             <th rowspan="4"  align="left" valign="middle"  style="background:#ffffff;">2.2.b Examine policies and interview personnel to verify that system configuration standards are updated as new vulnerability issues are identified, as defined in Requirement 6.1.</th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify the industry-accepted hardening standards the system configuration standards were verified to be consistent with.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
             <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify the policy documentation verified to define that system configuration standards are updated as new vulnerability issues are identified</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
             <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify the personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>  <tr>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed that verify that the process is implemented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
             <tr>
             <th rowspan="5"  align="left" valign="middle"  style="background:#ffffff;"><p>&nbsp;</p>
               <p>2.2.c Examine policies and interview personnel to verify that system configuration standards are applied when new systems are configured and verified as being in place before a system is installed on the network.</p></th>
             <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify the policy documentation examined to verify it defines that system configuration standards are applied when new systems are configured and verified as being in place before a system is installed on the network</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
           </tr>
             <tr>
               <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify the personnel interviewed for this testing procedure.</li></th>
               <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
             </tr>
             <tr>
               <th height="28" colspan="7" align="left" valign="middle"  style="background:#ffffff;">For the interview, summarize the relevant details discussed that verify:</th>
             </tr>
             <tr>
               <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>System configuration standards are applied when new systems are configured</li></th>
               <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
             </tr>
             <tr>
               <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>System configuration standards are verified as being in place before a system is installed on the network.</li></th>
               <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
             </tr>
             <tr>
               <th  align="left" valign="middle"  style="background:#ffffff;"><p>2.2.d Verify that system configuration standards include the following procedures for all types of system components:
                 </p>
                 <li>Changing of all vendor-supplied defaults and elimination of unnecessary default accounts</li><br />
                 <li>Implementing only one primary function per server to prevent functions that require different security levels from co-existing on the same server</li><br />
                 <li>Enabling only necessary services, protocols, daemons, etc., as required for the function of the system</li><br />
                 <li>Implementing additional security features for any required services, protocols or daemons that are considered to be insecure</li><br />
                 <li>Configuring system security parameters to prevent misuse</li><br />
                 <li>Removing all unnecessary functionality, such as scripts, drivers, features, subsystems, file systems, and unnecessary web servers</li></th>
               <th height="28" align="left" valign="middle"  style="background:#ffffff;"><li>Identify the system configuration standards for all types of system components that include the following procedures:</li><br />
               <li>Changing of all vendor-supplied defaults and elimination of unnecessary default accounts</li><br />
               <li>Implementing only one primary function per server to prevent functions that require different security levels from co-existing on the same server</li><br />
               <li>Enabling only necessary services, protocols, daemons, etc., as required for the function of the system</li><br />
               <li>Implementing additional security features for any required services, protocols or daemons that are considered to be insecure</li><br />
        <li>Configuring system security parameters to prevent misuse</li><br />
               <li>Removing all unnecessary functionality, such as scripts, drivers, features, subsystems, file systems, and unnecessary web servers</li></th>
               <th align="left" valign="top" colspan="6" style="background:#ffffff;"></th>
             </tr>
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.2.1 Implement only one primary function per server to prevent functions that require different security levels from co-existing on the same server. (For example, web servers, database servers, and DNS should be implemented on separate servers.)             
               <p><em><br />
               Note: Where virtualization technologies are in use, implement only one primary function per virtual system component.                            </em>               
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>            
     <tr>
             <th width="341" rowspan="3" align="left" valign="middle"  style="background:#ffffff;">2.2.1.a Select a sample of system components and inspect the system configurations to verify that only one primary function is implemented per server. </th>
    </tr>
           <tr>
             <th width="225" height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components observed.</li></th>
             <th width="149" align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how system configurations were inspected to verify that only one primary function per server is implemented.</li> </th>
             <th width="149" align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th rowspan="6" align="left" valign="middle"  style="background:#ffffff;">2.2.1.b If virtualization technologies are used, inspect the system configurations to verify that only one primary function is implemented per virtual system component or device.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether virtualization technologies are used. (yes/no)</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li><em>If &quot;no,&quot;</em> describe how systems were observed to verify that no virtualization technologies are used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><em>If &quot;yes&quot;:</em></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the functions for which virtualization technologies are used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of virtual system components or devices observed</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each virtual system component and device in the sample, describe how the system configurations were inspected to verify that only one primary function is implemented per virtual system component or device.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.2.2 Enable only necessary services, protocols, daemons, etc., as required for the function of the system.
             <p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>   
          <tr>
             <th width="341" rowspan="3" align="left" valign="middle"  style="background:#ffffff;">2.2.2.a Select a sample of system components and inspect enabled system services, daemons, and protocols to verify that only necessary services or protocols are enabled.</th>
          </tr>
           <tr>
             <th width="225" height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected.</li></th>
             <th width="149" align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how the enabled system services, daemons, and protocols were inspected to verify that only necessary services or protocols are enabled.</li> </th>
             <th width="149" align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><p><li>For each item in the sample of system components from 2.2.2.a, identify if any insecure services, daemons, or protocols are enabled. (yes/no)</p></li>
               <p><br />
             <em>If &quot;no,&quot; mark the remainder of 2.2.2.b and 2.2.3 as &quot;Not Applicable.&quot;</em></p></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>If &quot;yes,&quot; identify responsible personnel interviewed who confirm that a documented business justification was present for each insecure service, daemon, or protocol</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
              <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.2.3 Implement additional security features for any required services, protocols, or daemons that are considered to be insecure—for example, use secured technologies such as SSH, S-FTP, SSL, or IPSec VPN to protect insecure services such as NetBIOS, file-sharing, Telnet, FTP, etc.
             <p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>  
           <tr>
             <th rowspan="5" align="left" valign="middle"  style="background:#ffffff;">2.2.3 Inspect configuration settings to verify that security features are documented and implemented for all insecure services, daemons, or protocols.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>If &quot;yes&quot; at 2.2.b, perform the following:</em></th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify configuration settings inspected.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how configuration settings were inspected to verify that security features for all insecure services, daemons, or protocols are:</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Documented</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Implemented</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
               <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>
             <p>2.2.4 Configure system security parameters to prevent misuse.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>  
           <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">2.2.4.a Interview system administrators and/or security managers to verify that they have knowledge of common security parameter settings for system components.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the system administrators and/or security managers interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to verify that they have knowledge of common security parameter settings for system components.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">2.2.4.b Examine the system configuration standards to verify that common security parameter settings are included.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the system configuration standards examined to verify that common security parameter settings are included.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">2.2.4.c Select a sample of system components and inspect the common security parameters to verify that they are set appropriately and in accordance with the configuration standards.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how the common security parameters were inspected to verify that they are set appropriately and in accordance with the configuration standards.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  
             <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.2.5 Remove all unnecessary functionality, such as scripts, drivers, features, subsystems, file systems, and unnecessary web servers.
               <p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>   
           <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">2.2.5.a Select a sample of system components and inspect the configurations to verify that all unnecessary functionality (for example, scripts, drivers, features, subsystems, file systems, etc.) is removed.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how the configurations were inspected to verify that all unnecessary functionality is removed.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">2.2.5.b. Examine the documentation and security parameters to verify enabled functions are documented and support secure configuration</th>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how the security parameters were examined with relevant documentation to verify that enabled functions are:<</th>
            </tr>  
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Documented</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Support secure configuration</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>         
              <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">2.2.5.c. Examine the documentation and security parameters to verify that only documented functionality is present on the sampled system components.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify documentation examined for this testing procedure.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  
              <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the security parameters were examined with relevant documentation to verify that only documented functionality is present on the sampled system components from 2.2.5.a.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.3 Encrypt all non-console administrative access using strong cryptography. Use technologies such as SSH, VPN, or SSL/TLS for web-based management and other non-console administrative access.
             <p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
           <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">2.3 Select a sample of system components and verify that non-console administrative access is encrypted by performing the following:</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for 2.3.a-2.3.d to verify that non-console administrative access is encrypted </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
            <tr>
             <th rowspan="4" align="left" valign="middle"  style="background:#ffffff;">2.3.a Observe an administrator log on to each system and examine system configurations to verify that a strong encryption method is invoked before the administrator's password is requested.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;">For each item in the sample from 2.3:</th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the administrator log on for each system was observed to verify that a strong encryption method is invoked before the administrator's password is requested.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how system configurations for each system were examined to verify that a strong encryption method is invoked before the administrator's password is requested.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the strong encryption method used for non-console administrative access.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
            <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">2.3.b Review services and parameter files on systems to determine that Telnet and other insecure remote-login commands are not available for non-console access.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each item in the sample from 2.3:</th>
           </tr>  
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how services on systems were reviewed to determine that Telnet and other insecure remote-login commands are not available for non-console access.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
           <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="35" align="left" valign="top"  style="background:#ffffff;"><li>Describe how parameter files on systems were reviewed to determine that Telnet and other insecure remote-login commands are not available for non-console access.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>      
            <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">2.3.c Observe an administrator log on to each system to verify that administrator access to any web-based management interfaces is encrypted with strong cryptography.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each item in the sample from 2.3:</th>
           </tr>   
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the administrator log on to each system was observed to verify that administrator access to any web-based management interfaces was encrypted with strong cryptography.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>   
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the strong encryption method used for any web-based management interfaces.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>   
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">2.3.d Examine vendor documentation and interview personnel to verify that strong cryptography for the technology in use is implemented according to industry best practices and/or vendor recommendations.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the vendor documentation examined to verify that strong cryptography for the technology in use is implemented according to industry best practices and/or vendor recommendations.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>   
           <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>   
           <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed that verify that strong cryptography for the technology in use is implemented according to industry best practices and/or vendor recommendations.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>   
           
           <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.4 Maintain an inventory of system components that are in scope for PCI DSS.
             <p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr>
           <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">2.4.a Examine system inventory to verify that a list of hardware and software components is maintained and includes a description of function/use for each.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how the system inventory was examined to verify that a list of hardware and software components is:</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Maintained</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Includes a description of function/use for each</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">2.4.b Interview personnel to verify the documented inventory is kept current.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed that verify that the documented inventory is kept current.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
          <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.5 Ensure that security policies and operational procedures for managing vendor defaults and other security parameters are documented, in use, and known to all affected parties.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
          </tr> 
           <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">2.5 Examine documentation and interview personnel to verify that security policies and operational procedures for managing vendor defaults and other security parameters are:<br />
              <li> Documented,</li> <br />
               <li>In use, and </li><br />
             <li>Known to all affected parties.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that security policies and operational procedures for managing vendor defaults and other security parameters are documented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>   
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that the above documented security policies and operational procedures for managing vendor defaults and other security parameters are:</li><br />
             <li>In use</li><br />
             <li>Known to all affected parties</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            
           2.5 Ensure that security policies and operational procedures for managing vendor defaults and other security parameters are documented, in use, and known to all affected parties.
    </tr> 
         <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>2.6 Shared hosting providers must protect each entity's hosted environment and cardholder data. These providers must meet specific requirements as detailed in Appendix A: Additional PCI DSS Requirements for Shared Hosting Providers.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
     <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">2.6 Perform testing procedures A.1.1 through A.1.4 detailed in Appendix A: Additional PCI DSS Requirements for Shared Hosting Providers for PCI DSS assessments of shared hosting providers, to verify that shared hosting providers protect their entities' (merchants and service providers) hosted environment and data.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether the assessed entity is a shared hosting provider. (yes/no)</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>If &quot;yes,&quot; provide the name of the assessor who attests that Appendix A: Additional PCI DSS Requirements for Shared Hosting Providers has been completed. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>     
   </thead>
</table>
<h3> Protect Stored Cardholder Data </h3>    
<p> <em><strong>Requirement 3: 	Protect stored cardholder data </strong></em><strong></strong></p>
<table width="100%">
<thead>
<tr>
<th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
    </tr>
           <tr>
             <th valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
          
          
           <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.1 Keep cardholder data storage to a minimum by implementing data-retention and disposal policies, procedures and processes that include at least the following for all CHD storage:</p>
             <p>Limiting data storage amount and retention time to that which is required for legal, regulatory, and business requirements</p>
             <p>Processes for secure deletion of data when no longer needed.<br />
             </p>
             <p>Specific retention requirements for cardholder data.<br />
             </p>
             <p> A quarterly process for identifying and securely deleting stored cardholder data that exceeds defined retention.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>
               <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">3.1.a Examine the data-retention and disposal policies, procedures and processes to verify they include at least the following:
               <p><li>Legal, regulatory, and business requirements for data retention, including </p>
               <p><li>Specific requirements for retention of cardholder data (for example, cardholder data needs to be held for X period for Y business reasons).</p>
               <p><li>Secure deletion of cardholder data when no longer needed for legal, regulatory, or business reasons</p>
               <p><li>Coverage for all storage of cardholder data</p>
               <p><li>A quarterly process for identifying and securely deleting stored cardholder data that exceeds defined retention requirements.</p></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the data-retention and disposal documentation examined to verify policies, procedures, and processes define:</li><br />
               <li>Legal, regulatory, and business requirements for data retention, including: 
               </li><br />
               <li> Specific requirements for retention of cardholder data (for example, cardholder data needs to be held for X period for Y business reasons).</li><br />
               <li>Secure deletion of cardholder data when no longer needed for legal, regulatory, or business reasons.<br />
               Coverage for all storage of cardholder data.</li><br />
               <li>A quarterly process for identifying and securely deleting stored cardholder data that exceeds defined retention requirements.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
               <tr>
                 <th rowspan="6" align="left" valign="middle"  style="background:#ffffff;"><p>3.1.b Interview personnel to verify that:</p>
                   <li>All locations of stored cardholder data are included in the data-retention and disposal processes.</li><br />
                   <li>Either a quarterly automatic or manual process is in place to identify and securely delete stored cardholder data.</li><br />
                   <li>The quarterly automatic or manual process is performed for all locations of cardholder data.</li></th>
                 <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed who confirm that:                 
                 <li>All locations of stored cardholder data are included in the data-retention and disposal processes.                 
                 <li>Either a quarterly automatic or manual process is in place to identify and securely delete stored cardholder data.                 
                 <li>The quarterly automatic or manual process is performed for all locations of cardholder data.</th>
                 <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
               </tr>
               <tr>
                 <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interview, summarize the relevant details discussed that verify the following:</th>
               </tr>
               <tr>
                 <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All locations of stored cardholder data are included in the data-retention and disposal process.</li></th>
                 <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
               </tr>
               <tr>
                 <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Either a quarterly automatic or manual process is in place to identify and securely delete stored cardholder data.</li></th>
                 <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
               </tr>
               <tr>
                 <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>The quarterly automatic or manual process is performed for all locations of cardholder data.</li></th>
                 <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
               </tr>   
                <tr>
                 <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the quarterly process in place to identify and securely delete stored cardholder data, including whether it is an automatic or manual process.</li></th>
                 <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
               </tr>   
                <tr>
                 <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;"><p>3.1.c For a sample of system components that store cardholder data:</p>
                                    <li> Examine files and system records to verify that the data stored does not exceed the requirements defined in the data-retention policy.</li><br />
                 <li> Observe the deletion mechanism to verify data is deleted securely.</li></th>
                 <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected. </li></th>
                 <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
               </tr>   
                <tr>
                 <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how files and system records were examined to verify that the data stored does not exceed the requirements defined in the data-retention policy.</li></th>
                 <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
               </tr>
                <tr>
                  <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the deletion mechanism was observed to verify data is deleted securely.</li></th>
                  <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
                </tr>   
               <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.2 Do not store sensitive authentication data after authorization (even if encrypted). If sensitive authentication data is received, render all data unrecoverable upon completion of the authorization process.             
               <p><br />
               <em>It is permissible for issuers and companies that support issuing services to store sensitive authentication data if:<br />
                 <li>There is a business justification, and </li><br />
                <li> The data is stored securely.</li><br />
               Sensitive authentication data includes the data as cited in the following Requirements 3.2.1 through 3.2.3:</em></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
     <tr>
             <th rowspan="5" align="left" valign="middle"  style="background:#ffffff;">3.2.a For issuers and/or companies that support issuing services and store sensitive authentication data, review policies and interview personnel to verify there is a documented business justification for the storage of sensitive authentication data.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether the assessed entity is an issuer or supports issuing service. (yes/no)</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
            <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"> 
 	           <p><em>If "yes," complete the responses for 3.2.a and 3.2.b and mark 3.2.c and 3.2.d as "Not Applicable.</em></p>
 	           <p><em>"
               If "no," mark the remainder of 3.2.a and 3.2.b as "Not Applicable" and proceed to 3.2.c and 3.2.d.	 
 </em></p></th>
           </tr>   
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documentation reviewed to verify there is a documented business justification for the storage of sensitive authentication data.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>   
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the interviewed personnel who confirm there is a documented business justification for the storage of sensitive authentication data.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details of the business justification described.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>   
            <tr>
             <th rowspan="4" align="left" valign="middle"  style="background:#ffffff;">3.2.b For issuers and/or companies that support issuing services and store sensitive authentication data, examine data stores and system configurations to verify that the sensitive authentication data is secured.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>If "yes" at 3.2.a, </em></th>
           </tr>
            <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify data stores examined.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the system configurations examined.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the data stores and system configurations were examined to verify that the sensitive authentication data is secured.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>   
              <tr>
              <th rowspan="4" align="left" valign="middle"  style="background:#ffffff;">3.2.c For all other entities, if sensitive authentication data is received, review policies and procedures, and examine system configurations to verify the data is not retained after authorization.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether sensitive authentication data is received. (yes/no)</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>   
              <tr>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><p><em>If &quot;yes,&quot; complete 3.2.c and 3.2.d. </em></p>
                <p><em><br />
                If &quot;no,&quot; mark the remainder of 3.2.c and 3.2.d as &quot;Not Applicable&quot; and proceed to 3.2.1.</em></p></th>
            </tr>   
              <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document(s) reviewed to verify that it defines that data is not retained after authorization.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>   
              <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how system configurations were examined to verify the data is not retained after authorization.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>   
              <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">3.2.d For all other entities, if sensitive authentication data is received, review procedures and examine the processes for securely deleting the data to verify that the data is unrecoverable.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document(s) reviewed to verify that it defines processes for securely deleting the data to verify that the data is unrecoverable.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>   
              <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the processes for securely deleting the data were examined to verify that the data is unrecoverable.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>   
               <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.2.1 Do not store the full contents of any track (from the magnetic stripe located on the back of a card, equivalent data contained on a chip, or elsewhere). This data is alternatively called full track, track, track 1, track 2, and magnetic-stripe data.
             <p><em>Note: In the normal course of business, the following data elements from the magnetic stripe may need to be retained: </em><br />
               <em><br />
                 <li>The cardholder's name </li>
               <li>Primary account number (PAN) </li>
                 <li>Expiration date </li>
                 <li>Service code </li>
                 <p>To minimize risk, store only these data elements as needed for business.</p>
               </em></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
             <tr>
              <th rowspan="9" align="left" valign="middle"  style="background:#ffffff;"><p>3.2.1 For a sample of system components, examine data sources, including but not limited to the following, and verify that the full contents of any track from the magnetic stripe on the back of card or equivalent data on a chip are not stored after authorization:</p>
                <p><br />
               <li> Incoming transaction data</li>
               <br />
              <li>  All logs (for example, transaction, history, debugging, error)</li><br />
               <li> History files</li><br />
               <li> Trace files</li><br />
                <li>Several database schemas</li><br />
               <li>Database contents</li></th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for 3.2.1-3.2.3.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>   
            <tr>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each data source type below from the sample of system of components examined, summarize the specific examples of each data source type observed to verify that the full contents of any track from the magnetic stripe on the back of card or equivalent data on a chip are not stored after authorization. If that type of data source is not present, indicate that in the space.</th>
            </tr>              
            <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Incoming transaction data</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All logs (for example, transaction, history, debugging error)</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>History files</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Trace files</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Database schemas</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Database contents</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>If applicable, any other output observed to be generated </li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.2.2 Do not store the card verification code or value (three-digit or four-digit number printed on the front or back of a payment card) used to verify card-not-present transactions.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
             <tr>
              <th rowspan="8" align="left" valign="middle"  style="background:#ffffff;"><p>3.2.2 For a sample of system components, examine data sources, including but not limited to the following, and verify that the three-digit or four-digit card verification code or value printed on the front of the card or the signature panel (CVV2, CVC2, CID, CAV2 data) is not stored after authorization:<br />
               
                <li> Incoming transaction data</li>
               <br />
              <li>  All logs (for example, transaction, history, debugging, error)</li><br />
               <li> History files</li><br />
               <li> Trace files</li><br />
                <li>Several database schemas</li><br />
               <li>Database contents</li></th>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each data source type below from the sample of system of components at 3.2.1, summarize the specific examples of each data source type observed to verify that the three-digit or four-digit card verification code or value printed on the front of the card or the signature panel (CVV2, CVC2, CID, CAV2 data) is not stored after authorization. If that type of data source is not present, indicate that in the space.</th>
            </tr>  <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Incoming transaction data</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All logs (for example, transaction, history, debugging error)</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>History files</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  
            <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Trace files</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Database schemas</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Database contents</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>If applicable, any other output observed to be generated </li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.2.3 Do not store the personal identification number (PIN) or the encrypted PIN block.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
             <tr>
              <th rowspan="8" align="left" valign="middle"  style="background:#ffffff;"><p>3.2.3 For a sample of system components, examine data sources, including but not limited to the following and verify that PINs and encrypted PIN blocks are not stored after authorization: </p>
               
                <li> Incoming transaction data</li>
               <br />
              <li>  All logs (for example, transaction, history, debugging, error)</li><br />
               <li> History files</li><br />
               <li> Trace files</li><br />
                <li>Several database schemas</li><br />
               <li>Database contents</li></th>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each data source type below from the sample of system of components at 3.2.1, summarize the specific examples of each data source type observed. If that type of data source is not present, indicate that in the space.</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Incoming transaction data</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All logs (for example, transaction, history, debugging error)</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>History files</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Trace files</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Database schemas</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Database contents</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>If applicable, any other output observed to be generated </li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
              <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.3 Mask PAN when displayed (the first six and last four digits are the maximum number of digits to be displayed), such that only personnel with a legitimate business need can see the full PAN.              
               <p><br />
                <em>Note: This requirement does not supersede stricter requirements in place for displays of cardholder data—for example, legal or payment card brand requirements for point-of-sale (POS) receipts.</em></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;"><p>3.3.a Examine written policies and procedures for masking the display of PANs to verify:</p>
               <li>A list of roles that need access to displays of full PAN is documented, together with a legitimate business need for each role to have such access.<br />
               </li>
               <br />
               <li>PAN must be masked when displayed such that only personnel with a legitimate business need can see the full PAN.</li>
               <br />
               <li>All other roles not specifically authorized to see the full PAN must only see masked PANs.</li>
               <br />
              </th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document(s) reviewed to verify that written policies and procedures for masking the displays of PANs include the following:</li><br />
                <li>A list of roles that need access to displays of full PAN is documented, together with a legitimate business need for each role to have such access.</li><br />
                <li>PAN must be masked when displayed such that only personnel with a legitimate business need can see the full PAN.</li><br />
                <li>All other roles not specifically authorized to see the full PAN must only see masked PANs.                  <br />
               </li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">3.3.b Examine system configurations to verify that full PAN is only displayed for users/roles with a documented business need, and that PAN is masked for all other requests.</th>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how system configurations were examined to verify that:</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Full PAN is only displayed for users/roles with a documented business need.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>PAN is masked for all other requests.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">3.3.c Examine displays of PAN (for example, on screen, on paper receipts) to verify that PANs are masked when displaying cardholder data, and that only those with a legitimate business need are able to see full PAN.</th>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how displays of PAN were examined to verify that:</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>PANs are masked when displaying cardholder data</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Only those with a legitimate business need are able to see full PAN.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.4 Render PAN unreadable anywhere it is stored (including on portable digital media, backup media, and in logs) by using any of the following approaches:
              <br />
               <li>  One-way hashes based on strong cryptography, (hash must be of the entire PAN).<br />
               <li>Truncation (hashing cannot be used to replace the truncated segment of PAN).</li><br />
                 <li>Index tokens and pads (pads must be securely stored).</li><br />
                <li> Strong cryptography with associated key-management processes and procedures.</li><br />
               <em>Note: It is a relatively trivial effort for a malicious individual to reconstruct original PAN data if they have access to both the truncated and hashed version of a PAN. Where hashed and truncated versions of the same PAN are present in an entity's environment, additional controls should be in place to ensure that the hashed and truncated versions cannot be correlated to reconstruct the original PAN.</em></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
             <tr>
              <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;"><p>3.4.a Examine documentation about the system used to protect the PAN, including the vendor, type of system/process, and the encryption algorithms (if applicable) to verify that the PAN is rendered unreadable using any of the following methods:</p>
              <li>One-way hashes based on strong cryptography, </li>
              <li>Truncation </li><br />
              <li>Index tokens and pads, with the pads being securely stored</li><br />
              <li>Strong cryptography, with associated key-management processes and procedures</li></th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documentation about the system used to protect the PAN examined.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Briefly describe the documented methods—including the vendor, type of system/process, and then encryption algorithms (if applicable)— used to protect the PAN.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify which of the following methods is used to render the PAN unreadable:</li><br />
               <li>One-way hashes based on strong cryptography  </li><br />
               <li>Truncation</li><br />
               <li>Index token and pads, with the pads being securely stored</li><br />
               <li>Strong cryptography, with associated key-management processes and procedures </li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">3.4.b Examine several tables or files from a sample of data repositories to verify the PAN is rendered unreadable (that is, not stored in plain-text).</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of data repositories selected.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the tables or files examined for each item in the sample of data repositories.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how the table or file was examined to verify the PAN is rendered unreadable.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">3.4.c Examine a sample of removable media (for example, backup tapes) to confirm that the PAN is rendered unreadable.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of removable media selected.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how the sample of removable media was examined to confirm that the PAN is rendered unreadable.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">3.4.d Examine a sample of audit logs to confirm that the PAN is rendered unreadable or removed from the logs.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of audit logs selected.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how the sample of audit logs was examined to confirm that the PAN is rendered unreadable or removed from the logs.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
              <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.4.1 If disk encryption is used (rather than file- or column-level database encryption), logical access must be managed separately and independently of native operating system authentication and access control mechanisms (for example, by not using local user account databases or general network login credentials). Decryption keys must not be associated with user accounts.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
             <tr>
              <th rowspan="4" align="left" valign="middle"  style="background:#ffffff;">3.4.1.a If disk encryption is used, inspect the configuration and observe the authentication process to verify that logical access to encrypted file systems is implemented via a mechanism that is separate from the native operating system's authentication mechanism (for example, not using local user account databases or general network login credentials).</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether disk encryption is used. (yes/no)</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><p><em>If &quot;yes,&quot; complete the remainder of 3.4.1.a, 3.4.1.b, and 3.4.1.c</em></p>
               <br />
                <em>If &quot;no,&quot; mark the remainder of 3.4.1.a, 3.4.1.b and 3.4.1.c as &quot;Not Applicable.'</em></th>
            </tr> 
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the disk encryption mechanism(s) in use.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each disk encryption mechanism in use, describe how the configuration was inspected and the authentication process observed to verify that logical access to encrypted file systems is separate from the native operating system's authentication mechanism.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">3.4.1.b Observe processes and interview personnel to verify that cryptographic keys are stored securely (for example, stored on removable media that is adequately protected with strong access controls).</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how processes were observed to verify that cryptographic keys are stored securely.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed who confirm that cryptographic keys are stored securely.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">3.4.1.c Examine the configurations and observe the processes to verify that cardholder data on removable media is encrypted wherever stored.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the configurations examined.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the configurations were examined and the processes observed to verify that cardholder data on removable media is encrypted wherever stored.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.5 Document and implement procedures to protect keys used to secure stored cardholder data against disclosure and misuse:             
               <p><em><br />
               Note: This requirement applies to keys used to encrypt stored cardholder data, and also applies to key-encrypting keys used to protect data-encrypting keys—such key-encrypting keys must be at least as strong as the data-encrypting key.</em></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
            <tr>
              <th align="left" valign="middle"  style="background:#ffffff;"><p>3.5 Examine key-management policies and procedures to verify processes are specified to protect keys used for encryption of cardholder data against disclosure and misuse and include at least the following:</p>
              <li>Access to keys is restricted to the fewest number of custodians necessary.</li>
              <br />
              <li>Key-encrypting keys are at least as strong as the data-encrypting keys they protect.</li>
              <br />
              <li>Key-encrypting keys are stored separately from data-encrypting keys.</li>
              <br />
              <li>Keys are stored securely in the fewest possible locations and forms.</li>
              <br />
            </th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented key-management policies and processes examined to verify processes are defined to protect keys used for encryption of cardholder data against disclosure and misuse and include at least the following:</li><br />
              <li>Access to keys is restricted to the fewest number of custodians necessary.</li><br />
              <li>Key-encrypting keys are at least as strong as the data-encrypting keys they protect.</li><br />
              <li>Key-encrypting keys are stored separately from data-encrypting keys.</li><br />
              <li>Keys are stored securely in the fewest possible locations and forms.<br />
                <br />
              </li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
              <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.5.1 Restrict access to cryptographic keys to the fewest number of custodians necessary.
             <p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
            <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">3.5.1 Examine user access lists to verify that access to keys is restricted to the fewest number of custodians necessary.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify user access lists examined.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>  <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how user access lists were examined to verify that access to keys is restricted to the fewest number of custodians necessary.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.5.2 Store secret and private keys used to encrypt/decrypt cardholder data in one (or more) of the following forms at all times:<br />
               <li>Encrypted with a key-encrypting key that is at least as strong as the data-encrypting key, and that is stored separately from the data-encrypting key.</li><br />
             <li>Within a secure cryptographic device (such as a host security module (HSM) or PTS-approved point-of-interaction device).</li><br />
              <li>As at least two full-length key components or key shares, in accordance with an industry-accepted method.                             
               <p><em><br />
               Note: It is not required that public keys be stored in one of these forms.

             </em>
               <p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;"><p>3.5.2.a Examine documented procedures to verify that cryptographic keys used to encrypt/decrypt cardholder data must only exist in one (or more) of the following forms at all times. </p>
              <li>Encrypted with a key-encrypting key that is at least as strong as the data-encrypting key, and that is stored separately from the data-encrypting key.</li>
              <br />
              <li>Within a secure cryptographic device (such as a host security module (HSM) or PTS-approved point-of-interaction device).</li>
              <br />
              <li>As key components or key shares, in accordance with an industry-accepted method.</li>              <br />
              </th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented procedures examined to verify that cryptographic keys used to encrypt/decrypt cardholder data must only exist in one (or more) of the following forms at all times. </li><br />
               <li>Encrypted with a key-encrypting key that is at least as strong as the data-encrypting key, and that is stored separately from the data-encrypting key.</li><br />
               <li>Within a secure cryptographic device (such as a host security module (HSM) or PTS-approved point-of-interaction device).</li><br />
               <li>As key components or key shares, in accordance with an industry-accepted method.</li>  
               
               <p>&nbsp;</p>
               <p>&nbsp;</p></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr> 
             <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;"><p>3.5.2.b Examine system configurations and key storage locations to verify that cryptographic keys used to encrypt/decrypt cardholder data exist in one, (or more), of the following form at all times. </p>
               <li>Encrypted with a key-encrypting key. </li>
               <br />
               <li>Within a secure cryptographic device (such as a host security module (HSM) or PTS-approved point-of-interaction device).</li>
               <br />
               <li>As key components or key shares, in accordance with an industry-accepted method.</li>               <br /></th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Provide the name of the assessor who attests that all locations where keys are stored were identified.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how system configurations and key storage locations were examined to verify that cryptographic keys used to encrypt/decrypt cardholder data must only exist in one (or more) of the following forms at all times. </li>
               <li>Encrypted with a key-encrypting key that is at least as strong as the data-encrypting key, and that is stored separately from the data-encrypting key.</li><br />
               <li>Within a secure cryptographic device (such as a host security module (HSM) or PTS-approved point-of-interaction device).</li><br />
               <li>As key components or key shares, in accordance with an industry-accepted method.</li>
               </th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;"><p>3.5.2.c Wherever key-encrypting keys are used, examine system configurations and key storage locations to verify:</p>
               <li>Key-encrypting keys are at least as strong as the data-encrypting keys they protect.</li><br />
               <li>Key-encrypting keys are stored separately from data-encrypting keys.</li><br />
               </p></th>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how system configurations and key storage locations were examined to verify that, wherever key-encrypting keys are used:</th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Key-encrypting keys are at least as strong as the data-encrypting keys they protect</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Key-encrypting keys are stored separately from data-encrypting keys.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
              <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.5.1 Restrict access to cryptographic keys to the fewest number of custodians necessary.
             <p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.5.3 Examine key storage locations and observe processes to verify that keys are stored in the fewest possible locations.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how key storage locations were examined and processes were observed to verify that keys are stored in the fewest possible locations.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
              <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6 Fully document and implement all key-management processes and procedures for cryptographic keys used for encryption of cardholder data, including the following:             
               <p><em><br />
               Note: Numerous industry standards for key management are available from various resources including NIST, which can be found at http://csrc.nist.gov.
             </em>
               <p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
             <tr>
              <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">3.6.a Additional Procedure for service providers: If the service provider shares keys with their customers for transmission or storage of cardholder data, examine the documentation that the service provider provides to their customers to verify that it includes guidance on how to securely transmit, store, and update customers' keys, in accordance with </th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether the assessed entity is a service provider that shares keys with their customers for transmission or storage of cardholder data. (yes/no)</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>If &quot;yes,&quot; </em></th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document that the service provider provides to their customers examined to verify that it includes guidance on how to securely transmit, store and update customers' keys, in accordance with Requirements 3.6.1 through 3.6.8 below.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
              <tr>
             <th height="54" colspan="8" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6.b Examine the key-management procedures and processes for keys used for encryption of cardholder data and perform the following:</th>
             </tr>      
      <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6.1 Generation of strong cryptographic keys.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.1.a Verify that key-management procedures specify how to generate strong keys.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented key-management procedures examined to verify procedures specify how to generate strong keys.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.1.b Observe the method for generating keys to verify that strong keys are generated.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the method for generating keys was observed to verify that strong keys are generated.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
              <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6.2 Secure cryptographic key distribution.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.2.a Verify that key-management procedures specify how to securely distribute keys.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented key-management procedures examined to verify procedures specify how to securely distribute keys.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.2.b Observe the method for distributing keys to verify that keys are distributed securely</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the method for distributing keys was observed to verify that keys are distributed securely.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6.3 Secure cryptographic key storage.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.3.a Verify that key-management procedures specify how to securely store keys.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented key-management procedures examined to verify procedures specify how to securely store keys.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.3.b Observe the method for storing keys to verify that keys are stored securely.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the method for storing keys was observed to verify that keys are stored securely.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
               <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6.4 Cryptographic key changes for keys that have reached the end of their cryptoperiod (for example, after a defined period of time has passed and/or after a certain amount of cipher-text has been produced by a given key), as defined by the associated application vendor or key owner, and based on industry best practices and guidelines (for example, NIST Special Publication 800-57).</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
<tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.4.a Verify that key-management procedures include a defined cryptoperiod for each key type in use and define a process for key changes at the end of the defined cryptoperiod(s).</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document that defines:</li><br />
      <li>Key cryptoperiod(s) for each key type in use</li><br />
      <li>A process for key changes at the end of the defined cryptoperiod(s)</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.4.b Interview personnel to verify that keys are changed at the end of the defined cryptoperiod(s).</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify personnel interviewed for this testing procedure who confirm that keys are changed at the end of the defined cryptoperiod(s).</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
               <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6.5 Retirement or replacement (for example, archiving, destruction, and/or revocation) of keys as deemed necessary when the integrity of the key has been weakened (for example, departure of an employee with knowledge of a clear-text key component), or keys are suspected of being compromised.             
               <p><em>Note: If retired or replaced cryptographic keys need to be retained, these keys must be securely archived (for example, by using a key-encryption key). Archived cryptographic keys should only be used for decryption/verification purposes.</em></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
<tr>
              <th align="left" valign="middle"  style="background:#ffffff;"><p>3.6.5.a Verify that key-management procedures specify processes for the following:</p>
     <li>The retirement or replacement of keys when the integrity of the key has been weakened.</li>
     <br />
     <li>The replacement of known or suspected compromised keys.</li>
     <br />
     <li>Any keys retained after retiring or replacing are not used for encryption operations.</li>     <br /></th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the key-management document examined to verify that key-management processes specify the following:</li><br />
      <li>The retirement or replacement of keys when the integrity of the key has been weakened.</li><br />
      <li>The replacement of known or suspected compromised keys.</li><br />
      <li>Any keys retained after retiring or replacing are not used for encryption operations.</li>     
      </th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
             <tr>
              <th rowspan="5" align="left" valign="middle"  style="background:#ffffff;"><p>3.6.5.b Interview personnel to verify the following processes are implemented:</p>
               <li>Keys are retired or replaced as necessary when the integrity of the key has been weakened, including when someone with knowledge of the key leaves the company.</li>
               <br />
               <li>Keys are replaced if known or suspected to be compromised.</li>
               <br />
               <li>Any keys retained after retiring or replacing are not used for encryption operations.</li>               <br />
               </th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed for this testing procedure.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interview, summarize the relevant details discussed that verify the following processes are implemented:</th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Keys are retired or replaced as necessary when the integrity of the key has been weakened, including when someone with knowledge of the key leaves the company.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Keys are replaced if known or suspected to be compromised.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Any keys retained after retiring or replacing are not used for encryption operations.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
              <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6.6 If manual clear-text cryptographic key-management operations are used, these operations must be managed using split knowledge and dual control.              
               <p><em><br />
               Note: Examples of manual key-management operations include, but are not limited to: key generation, transmission, loading, storage and destruction.</em></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
             <tr>
              <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;"><p>3.6.6.a Verify that manual clear-text key-management procedures specify processes for the use of the following:
                </p>
               
                <li>Split knowledge of keys, such that key components are under the control of at least two people who only have knowledge of their own key components; AND</li><br />
              <li>Dual control of keys, such that at least two people are required to perform any key-management operations and no one person has access to the authentication materials (for example, passwords or keys) of another.</p></th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether manual clear-text cryptographic key-management operations are used. (yes/no)</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><p><em>If &quot;no,&quot; mark the remainder of 3.6.6.a and 3.6.6.b as &quot;Not Applicable.&quot;</em></p>
                <em>
               If &quot;yes,&quot; complete 3.6.6.a and 3.6.6.b.</p>
               </em></th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document examined to verify that manual clear-text key-management procedures define processes for the use of the following:</li><br />
               <li>Split knowledge of keys, such that key components are under the control of at least two people who only have knowledge of their own key components; AND</li><br />
               <li>Dual control of keys, such that at least two people are required to perform any key-management operations and no one person has access to the authentication materials of another.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;"><p>3.6.6 b Interview personnel and/or observe processes to verify that manual clear-text keys are managed with: </p>
              <li>Split knowledge, AND</li><br />
              <li>Dual control</li></th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed for this testing procedure, if applicable.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interview, summarize the relevant details discussed and/or describe how processes were observed to verify the following processes are implemented:</th>
            </tr>
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Split knowledge</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Dual Control</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6.7 Prevention of unauthorized substitution of cryptographic keys.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
             <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.7.a Verify that key-management procedures specify processes to prevent unauthorized substitution of keys.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document examined to verify that key-management procedures specify processes to prevent unauthorized substitution of keys.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">3.6.7.b Interview personnel and/or observe process to verify that unauthorized substitution of keys is prevented.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed for this testing procedure, if applicable.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed and/or describe how processes were observed to verify that unauthorized substitution of keys is prevented.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.6.8 Requirement for cryptographic key custodians to formally acknowledge that they understand and accept their key-custodian responsibilities.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
</tr>      <tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.8.a Verify that key-management procedures specify processes for key custodians to acknowledge (in writing or electronically) that they understand and accept their key-custodian responsibilities.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document examined to verify that key-management procedures specify processes for key custodians to acknowledge that they understand and accept their key-custodian responsibilities.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
<tr>
              <th align="left" valign="middle"  style="background:#ffffff;">3.6.8.b Observe documentation or other evidence showing that key custodians have acknowledged (in writing or electronically) that they understand and accept their key-custodian responsibilities.</th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how key custodian acknowledgements or other evidence were observed to verify that key custodians have acknowledged that they understand and accept their key-custodian responsibilities</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>3.7 Ensure that security policies and operational procedures for protecting stored cardholder data are documented, in use, and known to all affected parties.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
             <tr>
              <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;"><p>3.7 Examine documentation and interview personnel to verify that security policies and operational procedures for protecting stored cardholder data are:</p>
               <li>Documented, </li>
               <br />
               <li>In use, and </li><br />
               <li>Known to all affected parties</li>               <br /></th>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that security policies and operational procedures for protecting stored cardholder data are documented.</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
             <tr>
              <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that the above documented security policies and operational procedures for protecting stored cardholder data are:</li>
               <li>In use</li><br />
               <li>Known to all affected parties</li></th>
              <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
            </tr>
  </thead>
</table>
  <h3> <em>Requirement 4: 	Encrypt transmission of cardholder data across open, public networks</em></h3>
      <table width="100%" >
     <thead>
     <tr>     
    <th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
       </tr>
           <tr>
             <th valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
          
            <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>4.1 Use strong cryptography and security protocols (for example, SSL/TLS, IPSEC, SSH, etc.) to safeguard sensitive cardholder data during transmission over open, public networks, including the following:</p>
             <li>Only trusted keys and certificates are accepted.</li>
             <br />
             <li>The protocol in use only supports secure versions or configurations.</li>
             <br />
             <li>The encryption strength is appropriate for the encryption methodology in use.</li><br />
            
             Examples of open, public networks include but are not limited to:
             <br />
             <li>The Internet<br />
             </li>
             <br />
             <li>Wireless technologies, including 802.11 and Bluetooth</li>
             <br />
             <li>Cellular technologies, for example, Global System for Mobile communications (GSM), Code division multiple access (CDMA)<br />
             </li>
             <br />
             <li>General Packet Radio Service (GPRS)</li>
             <br />
             <li>Satellite communications </li>             <br />
             
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>        
          </tr>
           <tr>
             <th rowspan="4" align="left" valign="middle"  style="background:#ffffff;">4.1.a Identify all locations where cardholder data is transmitted or received over open, public networks. Examine documented standards and compare to system configurations to verify the use of security protocols and strong cryptography for all locations.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify all locations where cardholder data is transmitted or received over open, public networks.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented standards examined</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
            <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how the documented standards were examined and compared to system configurations to verify the use of:</th>
           </tr>  
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Security protocols observed in use</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;"><p>4.1.b Review documented policies and procedures to verify processes are specified for the following:</p>
             <li>For acceptance of only trusted keys and/or certificates.</li>
             <br />
             <li>For the protocol in use to only support secure versions and configurations (that insecure versions or configurations are not supported).</li>
             <br />
             <li>For implementation of proper encryption strength per the encryption methodology in use.</li>             <br />
             </th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that processes are specified for the following:</li>
               <br /></li>
              <li>For acceptance of only trusted keys and/or certificates.</li><br />
              <li>For the protocol in use to only support secure versions and configurations (that insecure versions or configurations are not supported).</li><br />
              <li>For implementation of proper encryption strength per the encryption methodology in use.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">4.1.c Select and observe a sample of inbound and outbound transmissions as they occur to verify that all cardholder data is encrypted with strong cryptography during transit.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the sample of inbound and outbound transmissions observed as they occurred.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the samples of inbound and outbound transmissions were observed as they occurred to verify that all cardholder data is encrypted with strong cryptography during transit.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">4.1.d Examine keys and certificates to verify that only trusted keys and/or certificates are accepted.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For all instances where cardholder data is transmitted or received over open, public networks:</th>
           </tr> 
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the mechanisms used to ensure that only trusted keys and/or certificates are accepted.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">4.1.e Examine system configurations to verify that the protocol is implemented to use only secure configurations and does not support insecure versions or configurations.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For all instances where cardholder data Is transmitted or received over open, public networks, describe how system configurations were observed to verify that the protocol is implemented:</th>
           </tr> 
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>To use only secure configurations.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Does not support insecure versions or configurations.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">4.1.f Examine system configurations to verify that the proper encryption strength is implemented for the encryption methodology in use. (Check vendor recommendations/best practices.)</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each encryption methodology in use, </th>
           </tr> 
            <tr>
             <th rowspan="6" align="left" valign="middle"  style="background:#ffffff;">4.1.g For SSL/TLS implementations, examine system configurations to verify that SSL/TLS is enabled whenever cardholder data is transmitted or received. <br />
               <em><li>For example, for browser-based implementations:</li><br />
               <li>&quot;HTTPS&quot; appears as the browser Universal Record Locator (URL) protocol; and</li><br />
              <li>Cardholder data is only requested if &quot;HTTPS&quot; appears as part of the URL.</li></em></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify vendor recommendations/best practices for encryption strength</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the encryption strength observed to be implemented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether SSL/TLS use to encrypt cardholder date over open, public networks at all in the cardholder date environment. (yes/no) </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>If &quot;yes,&quot; for all instances where SSL/TLS is used to encrypt cardholder data over open, public networks, describe how system configurations were examined to verify that SSL/TLS is enabled whenever cardholder data is transmitted or received, as follows:</em></th>
           </tr> 
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>HTTPS appears as part of the browser URL.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Cardholder is only requested if HTTPS appears as part of the URL</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>4.1.1 Ensure wireless networks transmitting cardholder data or connected to the cardholder data environment, use industry best practices (for example, IEEE 802.11i) to implement strong encryption for authentication and transmission.<br />
               <em>Note: The use of WEP as a security control is prohibited.</em></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>             
            <tr>
             <th rowspan="4" align="left" valign="middle"  style="background:#ffffff;"><p>4.1.1 Identify all wireless networks transmitting cardholder data or connected to the cardholder data environment. Examine documented standards and compare to system configuration settings to verify the following for all wireless networks identified:</p>
                           <li>   Industry best practices (for example, IEEE 802.11i) are used to implement strong encryption for authentication and transmission.</li><br />
              
             <li> Weak encryption (for example, WEP, SSL version 2.0 or older) is not used as a security control for authentication or transmission.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify all wireless networks transmitting cardholder data or connected to the cardholder data environment.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented standards examined to verify processes define the following for all wireless networks identified:</li><br />
              <li>Industry best practices (for example, IEEE 802.11i) are used to implement strong encryption for authentication and transmission.</li><br />
              <li>Weak encryption (for example, WEP, SSL version 2.0 or older) is not used as a security control for authentication or transmission.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how documented standards were examined and compared to system configuration settings to verify the following for all wireless networks identified:</th>
           </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Industry best practices are used to implement strong encryption for authentication and transmission.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>4.2 Never send unprotected PANs by end-user messaging technologies (for example, e-mail, instant messaging, chat, etc.).</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>               
           <tr>
             <th rowspan="4" align="left" valign="middle"  style="background:#ffffff;">4.2.a If end-user messaging technologies are used to send cardholder data, observe processes for sending PAN and examine a sample of outbound transmissions as they occur to verify that PAN is rendered unreadable or secured with strong cryptography whenever it is sent via end-user messaging technologies.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify whether end-user messaging technologies are used to send cardholder data. (yes/no)</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
            
            <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><p><em>If "no," mark the remainder of 4.2.a as "Not Applicable" and proceed to 4.2.b.
             </em></p>
              <p><em> If "yes," complete the following:</em></p></th>
           </tr> 
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how processes for sending PAN were observed to verify that PAN is rendered unreadable or secured with strong cryptography whenever it is sent via end-user messaging technologies.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the sample of outbound transmissions observed as they occurred to verify that PAN is rendered unreadable or secured with strong cryptography whenever it is sent via end-user messaging technologies.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
           <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">4.2.b Review written policies to verify the existence of a policy stating that unprotected PANs are not to be sent via end-user messaging technologies.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>If "no" at 4.2.a:</em></th>
           </tr> 
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the policy document stating that unprotected PANs must not be sent via end-user messaging technologies.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
           <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>If "yes" at 4.2.a:</em></th>
           </tr> 
           <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the policy document that explicitly prohibits PAN from being sent via end-user messaging technologies under any circumstance.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>4.3 Ensure that security policies and operational procedures for encrypting transmissions of cardholder data are documented, in use, and known to all affected parties.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>            
           <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;"><p>4.3 Examine documentation and interview personnel to verify that security policies and operational procedures for encrypting transmissions of cardholder data are:</p>
             <li>Documented, </li>
             <br />
              <li>In use, and </li>
              <br />
               <li>Known to all affected parties.</li>               <br /></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that security policies and operational procedures for encrypting transmissions of cardholder data are documented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr> 
           <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that the above documented security policies and operational procedures for encrypting transmissions of cardholder data are:</li><br />
             <li>In use</li><br />
             <li>Known to all affected parties</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>            
</thead>         
  </table>
            
 <h3> <em>Maintain a Vulnerability Management Program</em></h3>
 <strong><em> Requirement 5: 	Protect all systems against malware and regularly update anti-virus software or programs </em>  
<table width="100%">
 <thead>
 <tr>
 <th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
    </tr>
           <tr>
             <th valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
          
            <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>5.1 Deploy anti-virus software on all systems commonly affected by malicious software (particularly personal computers and servers).</p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
      <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">5.1 For a sample of system components including all operating system types commonly affected by malicious software, verify that anti-virus software is deployed if applicable anti-virus technology exists.></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected (including all operating system types commonly affected by malicious software).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how anti-virus software was observed to be deployed. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">5.1.1 Ensure that anti-virus programs are capable of detecting, removing, and protecting against all known types of malicious software.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>            
                <tr>
             <th rowspan="5" align="left" valign="middle"  style="background:#ffffff;"><p>5.1.1 Review vendor documentation and examine anti-virus configurations to verify that anti-virus programs;</p>
               <li>Detect all known types of malicious software, </li><br />
                <li> Remove all known types of malicious software, and</li> <br />
                 <li>Protect against all known types of malicious software.</li> <br />
                 (Examples of types of malicious software include viruses, Trojans, worms, spyware, adware, and rootkits).</p></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the vendor documentation reviewed to verify that anti-virus programs:</li><br />
               <li>Detect all known types of malicious software,
               </li><br />
               <li>Remove all known types of malicious software, and
               </li><br />
               <li> Protect against all known types of malicious software.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how anti-virus configurations were examined to verify that anti-virus programs:</th>
           </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Detect all known types of malicious software,</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Remove all known types of malicious software, and</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Protect against all known types of malicious software.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">5.1.2 For systems considered to be not commonly affected by malicious software, perform periodic evaluations to identify and evaluate evolving malware threats in order to confirm whether such systems continue to not require anti-virus software.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>        
             <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">5.1.2 Interview personnel to verify that evolving malware threats are monitored and evaluated for systems not currently considered to be commonly affected by malicious software, in order to confirm whether such systems continue to not require anti-virus software.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed and/or describe how processes were observed to verify that evolving malware threats are monitored and evaluated for systems not currently considered to be commonly affected by malicious software, and that such systems continue to not require anti-virus software.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">5.2 Ensure that all anti-virus mechanisms are maintained as follows:<br />
               <li>Are kept current.<li><br />
               <li>Perform periodic scans.</li><br />
             <li> Generate audit logs which are retained per PCI DSS Requirement 10.7.</li></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>        
             <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">5.2.a Examine policies and procedures to verify that anti-virus software and definitions are required to be kept up-to-date.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented policies and procedures examined to verify that anti-virus software and definitions are required to be kept up to date.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;"><p>5.2.b Examine anti-virus configurations, including the master installation of the software, to verify anti-virus mechanisms are:</p>
            
               <li>Configured to perform automatic updates, and </li><br />
               <li>Configured to perform periodic scans.</li><br />
              <li>(continued on next page)</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how anti-virus configurations, including the master installation of the software, were examined to verify anti-virus mechanisms are:</th>
           </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Configured to perform automatic updates, and </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Configured to perform periodic scans.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th rowspan="4" align="left" valign="middle"  style="background:#ffffff;"><p>5.2.c Examine a sample of system components, including all operating system types commonly affected by malicious software, to verify that: </p>
             
               <li> The anti-virus software and definitions are current.</li><br />
              <li> Periodic scans are performed.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components, including all operating system types commonly affected by malicious software, selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how system components were examined to verify that:</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>The anti-virus software and definitions are current.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Periodic scans are performed.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th rowspan="4" align="left" valign="middle"  style="background:#ffffff;">5.2.d Examine anti-virus configurations, including the master installation of the software and a sample of system components, to verify that:<br />
               Anti-virus software log generation is enabled, and<br />
              Logs are retained in accordance with PCI DSS Requirement 10.7.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each item in the sample, describe how anti-virus configurations, including the master installation of the software, were examined to verify that:</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Anti-virus software log generation is enabled, and</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Logs are retained in accordance with PCI DSS Requirement 10.7.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>5.3 Ensure that anti-virus mechanisms are actively running and cannot be disabled or altered by users, unless specifically authorized by management on a case-by-case basis for a limited time period. </p>
               <p><br />
               <em>Note: Anti-virus solutions may be temporarily disabled only if there is legitimate technical need, as authorized by management on a case-by-case basis. If anti-virus protection needs to be disabled for a specific purpose, it must be formally authorized. Additional security measures may also need to be implemented for the period of time during which anti-virus protection is not active.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>        
             <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">5.3.a Examine anti-virus configurations, including the master installation of the software and a sample of system components, to verify the anti-virus software is actively running.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how anti-virus configurations, including the master installation of the software, were examined to verify that the anti-virus software is actively running.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">5.3.b Examine anti-virus configurations, including the master installation of the software and a sample of system components, to verify that the anti-virus software cannot be disabled or altered by users.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample from 5.3.a, describe how anti-virus configurations, including the master installation of the software, were examined to verify that the anti-virus software cannot be disabled or altered by users.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">5.3.c Interview responsible personnel and observe processes to verify that anti-virus software cannot be disabled or altered by users, unless specifically authorized by management on a case-by-case basis for a limited time period.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm that anti-virus software cannot be disabled or altered by users, unless specifically authorized by management on a case-by-case basis for a limited time period.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the process was observed to verify that anti-virus software cannot be disabled or altered by users, unless specifically authorized by management on a case-by-case basis for a limited time period.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">5.4 Ensure that security policies and operational procedures for protecting systems against malware are documented, in use, and known to all affected parties.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>        
             <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">5.4 Examine documentation and interview personnel to verify that security policies and operational procedures for protecting systems against malware are:<br />
               Documented, <br />
               In use, and <br />
               Known to all affected parties.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that security policies and operational procedures for protecting systems against malware are documented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
             <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that the above documented security policies and operational procedures for protecting systems against malware are:
                                        
                <li> In use</li><br />
              <li> Known to all affected parties</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>     
  </thead>
</table>
<h3>Requirement 6:	Develop and maintain secure systems and applications</h3>
  <table width="100%">
  <thead>
  <tr>
  
 <th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
    </tr>
           <tr>
             <th valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
          
            <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.1 Establish a process to identify security vulnerabilities, using reputable outside sources for security vulnerability information, and assign a risk ranking (for example, as &quot;high,&quot; &quot;medium,&quot; or &quot;low&quot;) to newly discovered security vulnerabilities.</p>
               <p> <em><br />
               Note: Risk rankings should be based on industry best practices as well as consideration of potential impact. For example, criteria for ranking vulnerabilities may include consideration of the CVSS base score, and/or the classification by the vendor, and/or type of systems affected.</em></p>
              <br />
               Methods for evaluating vulnerabilities and assigning risk ratings will vary based on an organization's environment and risk assessment strategy. Risk rankings should, at a minimum, identify all vulnerabilities considered to be a &quot;high risk&quot; to the environment. In addition to the risk ranking, vulnerabilities may be considered &quot;critical&quot; if they pose an imminent threat to the environment, impact critical systems, and/or would result in a potential compromise if not addressed. Examples of critical systems may include security systems, public-facing devices and systems, databases, and other systems that store, process, or transmit cardholder data.</em></p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
      <tr>
             <th align="left" valign="middle"  style="background:#ffffff;"><p>6.1.a Examine policies and procedures to verify that processes are defined for the following:</p>
             <li>To identify new security vulnerabilities. <br />
             </li>
             <br />
              <li>To assign a risk ranking to vulnerabilities that includes identification of all &quot;high risk&quot; and &quot;critical&quot; vulnerabilities.<br />
              </li>
              <br />
               <li>To include using reputable outside sources for security vulnerability information.</li>
             
             </th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented policies and procedures examined to confirm that processes are defined:</li><br />
             <li>To identify new security vulnerabilities.</li>
             <br />
                 <li>To assign a risk ranking to vulnerabilities that includes identification of all &quot;high risk&quot; and &quot;critical&quot; vulnerabilities.</li>
                 <br />
                     <li>To include using reputable outside sources for security vulnerability information.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;"><p>6.1.b Interview responsible personnel and observe processes to verify that: </p>
              <li>New security vulnerabilities are identified. </li>
              <br />
               <li>A risk ranking is assigned to vulnerabilities that includes identification of all &quot;high&quot; risk and &quot;critical&quot; vulnerabilities. </li>
               <br />
              <li>Processes to identify new security vulnerabilities include using reputable outside sources for security vulnerability information</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm that:</li><br />
              <li>New security vulnerabilities are identified. </li>
              <li>A risk ranking is assigned to vulnerabilities that includes identification of all &quot;high&quot; risk and &quot;critical&quot; vulnerabilities. </li><br />
              <li>Processes to identify new security vulnerabilities include using reputable outside sources for security vulnerability information.<br />
                <br />
              </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe the processes observed to verify that:</th>
           </tr>
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>New security vulnerabilities are identified.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>A risk ranking is assigned to vulnerabilities to include identification of all &quot;high&quot; risk and &quot;critical&quot; vulnerabilities. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Processes to identify new security vulnerabilities include using reputable outside sources for security vulnerability information.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the outside sources used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
           <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.2 Ensure that all system components and software are protected from known vulnerabilities by installing applicable vendor-supplied security patches. Install critical security patches within one month of release.</p>
               <p><em><br />
               Note: Critical security patches should be identified according to the risk ranking process defined in Requirement 6.1.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>        
     <tr>
             <th align="left" valign="middle"  style="background:#ffffff;"><p>6.2.a Examine policies and procedures related to security-patch installation to verify processes are defined for:</p>
               <li>Installation of applicable critical vendor-supplied security patches within one month of release.<br />
               </li>
               <br />
             
             <li>Installation of all applicable vendor-supplied security patches within an appropriate time frame (for example, within three months).</li>
             </th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented policies and procedures related to security-patch installation examined to verify processes are defined for:</li>
              <br />
             <li>Installation of applicable critical vendor-supplied security patches within one month of release.<br />
             </li>
             <br />
             <li>Installation of all applicable vendor-supplied security patches within an appropriate time frame.</li>
             </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
            <tr>
             <th rowspan="5" align="left" valign="middle"  style="background:#ffffff;"><p>6.2.b For a sample of system components and related software, compare the list of security patches installed on each system to the most recent vendor security-patch list, to verify the following:</p>
              <li>That applicable critical vendor-supplied security patches are installed within one month of release.</li>
              <br />
              <li>All applicable vendor-supplied security patches are installed within an appropriate time frame (for example, within three months).</li>              <br /></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components and related software selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the vendor security patch list reviewed.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each item in the sample, describe how the list of security patches installed on each system was compared to the most recent vendor security-patch list to verify that:</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Applicable critical vendor-supplied security patches are installed within one month of release.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
            <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All applicable vendor-supplied security patches are installed within an appropriate time frame.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
           </tr>
  <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.3 Develop internal and external software applications (including web-based administrative access to applications) securely, as follows:<br />
             <li>  In accordance with PCI DSS (for example, secure authentication and logging). </li><br />
               <li>Based on industry standards and/or best practices.</li><br />
               <li>Incorporate information security throughout the software development life cycle. </li>
               <br />
               <em>Note: this applies to all software developed internally as well as bespoke or custom software developed by a third party
</p>
      </em></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
       <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">6.3.a Examine written software-development processes to verify that the processes are based on industry standards and/or best practices.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>6.3.a Examine written software-development processes to verify that the processes are based on industry standards and/or best practices.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the industry standards and/or best practices used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>     
      <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">6.3.b Examine written software development processes to verify that information security is included throughout the life cycle.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented software development processes examined to verify that information security is included throughout the life cycle. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>       
      <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">6.3.c Examine written software development processes to verify that software applications are developed in accordance with PCI DSS.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented software development processes examined to verify that software applications are developed in accordance with PCI DSS.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>       
      <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">6.3.d Interview software developers to verify that written software development processes are implemented.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the software developers interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>       
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to verify that written software development processes are implemented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.3.1 Remove development, test and/or custom application accounts, user IDs, and passwords before applications become active or are released to customers.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>                  
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">6.3.1 Examine written software-development procedures and interview responsible personnel to verify that pre-production and/or custom application accounts, user IDs and/or passwords are removed before an application goes into production or is released to customers.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented software-development processes examined to verify processes define that pre-production and/or custom application accounts, user IDs and/or passwords are removed before an application goes into production or is released to customers.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>         <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>         <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to confirm that pre-production and/or custom application accounts, user IDs and/or passwords are removed before an application goes into production or is released to customers.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.3.2 Review custom code prior to release to production or customers in order to identify any potential coding vulnerability (using either manual or automated processes) to include at least the following:
       <li>Code changes are reviewed by individuals other than the originating code author, and by individuals knowledgeable about code review techniques and secure coding practices.<br />
       </li>
       <br />
               <li>Code reviews ensure code is developed according to secure coding guidelines.</li>
               <br />
         <li>Appropriate corrections are implemented prior to release.</li><br />
         <li>Code review results are reviewed and approved by management prior to release.<br />
         </li>
        
               <p><br />
         <em>Note: This requirement for code reviews applies to all custom code (both internal and public-facing), as part of the system development life cycle.</em></p>
         <p><em>applications are also subject to additional controls, to address ongoing threats and vulnerabilities after implementation, as defined at PCI DSS Requirement 6.6.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>               
    <tr>
             <th align="left" valign="middle"  style="background:#ffffff;"><p>6.3.2.a Examine written software development procedures and interview responsible personnel to verify that all custom application code changes must be reviewed (using either manual or automated processes) as follows:</p>
            <li>Code changes are reviewed by individuals other than the originating code author, and by individuals who are knowledgeable in code review techniques and secure coding practices.</li>
            <br />
            <li>Code reviews ensure code is developed according to secure coding guidelines (see PCI DSS Requirement 6.5).</li>
            <br />
            <li>Appropriate corrections are implemented prior to release.</li>
            <br />
              <li>Code-review results are reviewed and approved by management prior to release.</li>              <br />
            </th>
      <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented software-development processes examined to verify processes define that all custom application code changes must be reviewed (using either manual or automated processes) as follows:</li><br />
        <li>Code changes are reviewed by individuals other than the originating code author, and by individuals who are knowledgeable in code review techniques and secure coding practices.</li><br />
        <li>Appropriate corrections are implemented prior to release.</li><br />
        <li>Code-review results are reviewed and approved by management prior to release.</li>
      </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>    
      <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed for this testing procedure who confirm that all custom application code changes are reviewed as follows:</li><br />
        <li>Code changes are reviewed by individuals other than the originating code author, and by individuals who are knowledgeable in code-review techniques and secure coding practices.</li><br />
        <li>Code reviews ensure code is developed according to secure coding guidelines (see PCI DSS Requirement 6.5).</li><br />
        <li>Appropriate corrections are implemented prior to release.</li><br />
        <li>Code-review results are reviewed and approved by management prior to release.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how all custom application code changes must be reviewed, including whether processes are manual or automated.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
    
      <tr>
             <th rowspan="5" align="left" valign="top"  style="background:#ffffff;">6.3.2.b Select a sample of recent custom application changes and verify that custom application code is reviewed according to 6.3.2.a, above.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of recent custom application changes selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
    
      <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each item in the sample, describe how code review processes were observed to verify custom application code is reviewed as follows:</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Code changes are reviewed by individuals other than the originating code author.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Code changes are reviewed by individuals who are knowledgeable in code-review techniques and secure coding practices.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Code reviews ensure code is developed according to secure coding guidelines (see PCI DSS Requirement 6.5).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Appropriate corrections are implemented prior to release.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Code-review results are reviewed and approved by management prior to release.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.4 Follow change control processes and procedures for all changes to system components. The processes must include the following:</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>             
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;"><p>6.4 Examine policies and procedures to verify the following are defined: </p>
            <li>Development/test environments are separate from production environments with access control in place to enforce separation.</li>
            <br />
            <li>A separation of duties between personnel assigned to the development/test environments and those assigned to the production environment.</li>
            <br />
            <li>Production data (live PANs) are not used for testing or development.</li>
            <br />
            <li>Test data and accounts are removed before a production system becomes active.</li> <br />
            <li>Change control procedures related to implemen</li>ting security patches and software modifications are documented. </th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented policies and procedures examined to verify that the following are defined:</li><br />
             <li>Development/test environments are separate from production environments with access control in place to enforce separation.</li><br />
             <li>Development/test environments are separate from production environments with access control in place to enforce separation.</li>
             <br />
             <li>A separation of duties between personnel assigned to the development/test environments and those assigned to the production environment.</li>
             <br />
             <li>Production data (live PANs) are not used for testing or development.</li><br />
             <li>Test data and accounts are removed before a production system becomes active.</li><br />
             <li>Change-control procedures related to implementing security patches and software modifications are documented.</li>             <br /></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
    <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.4.1 Separate development/test environments from production environments, and enforce the separation with access controls.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>          
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">6.4.1.a Examine network documentation and network device configurations to verify that the development/test environments are separate from the production environment(s).</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the network documentation that illustrates that the development/test environments are separate from the production environment(s).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how network device configurations were examined to verify that the development/test environments are separate from the production environment(s).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">6.4.1.b Examine access controls settings to verify that access controls are in place to enforce separation between the development/test environments and the production environment(s).</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the access control settings examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;">Describe how the access control settings were examined to verify that access controls are in place to enforce separation between the development/test environments and the production environment(s).</th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.4.2 Separation of duties between development/test and production environments.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">6.4.2 Observe processes and interview personnel assigned to development/test environments and personnel assigned to production environments to verify that separation of duties is in place between development/test environments and the production environment.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel assigned to development/test environments interviewed who confirm that separation of duties is in place between development/test environments and the production environment.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel assigned to production environments interviewed who confirm that separation of duties is in place between development/test environments and the production environment.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how processes were observed to verify that separation of duties is in place between development/test environments and the production environment.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.4.3 Production data (live PANs) are not used for testing or development.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">6.4.3.a Observe testing processes and interview personnel to verify procedures are in place to ensure production data (live PANs) are not used for testing or development.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed who confirm that procedures are in place to ensure production data (live PANs) are not used for testing or development.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how testing processes were observed to verify procedures are in place to ensure production data (live PANs) are not used for testing.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how testing processes were observed to verify procedures are in place to ensure production data (live PANs) are not used for development.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">6.4.3.b Examine a sample of test data to verify production data (live PANs) is not used for testing or development.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how a sample of test data was examined to verify production data (live PANs) is not used for testing.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how a sample of test data was examined to verify production data (live PANs) is not used for development.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.4.4 Removal of test data and accounts before production systems become active.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">6.4.4.a Observe testing processes and interview personnel to verify test data and accounts are removed before a production system becomes active.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed who confirm that test data and accounts are removed before a production system becomes active.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how testing processes were observed to verify that test data is removed before a production system becomes active.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how testing processes were observed to verify that test accounts are removed before a production system becomes active.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">6.4.4.b Examine a sample of data and accounts from production systems recently installed or updated to verify test data and accounts are removed before the system becomes active.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how a sample of test data from production systems recently installed or updated was examined to verify test data is removed before the system becomes active.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how a sample of test accounts from production systems recently installed or updated was examined to verify test accounts are removed before the system becomes active.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.4.5 Change control procedures for the implementation of security patches and software modifications must include the following:</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
      <tr>
             <th align="left" valign="middle"  style="background:#ffffff;"><p>6.4.5.a Examine documented change-control procedures related to implementing security patches and software modifications and verify procedures are defined for:</p>
             <li>Documentation of impact.</li><br />
              <li> Documented change approval by authorized parties.</li><br />
              <li> Functionality testing to verify that the change does not adversely impact the security of the system.</li><br />
            <li> Back-out procedures</li>
            </th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented change-control procedures related to implementing security patches and software modification examined to verify procedures are defined for:</li><br />
             <li>Documentation of impact.</li><br />
             <li>Documented change approval by authorized parties
             </li><br />
             <li>Functionality testing to verify that the change does not adversely impact the security of the system.</li><br />
             <li>Back-out procedures.      </li>         <br />
             </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">6.4.5.b For a sample of system components, interview responsible personnel to determine recent changes/security patches. Trace those changes back to related change control documentation. For each change examined, perform the following:</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed to determine recent changes/security patches.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, identify the sample of changes and the related change control documentation selected for this testing procedure (through 6.4.5.4)</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.4.5.1 Documentation of impact.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;">6.4.5.1 Verify that documentation of impact is included in the change control documentation for each sampled change.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each change from 6.4.5.b, describe how the changes were traced back to the identified related change control documentation to verify that documentation of impact is included in the change control documentation for each sampled change.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p> <br />
               6.4.5.2 Documented change approval by authorized parties.
       </p></th>
             <th align="left" valign="top"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;">6.4.5.2 Verify that documented approval by authorized parties is present for each sampled change.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each change from 6.4.5.b, describe how the changes were traced back to the identified related change control documentation to verify that documented approval by authorized parties is present in the change control documentation for each sampled change.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.4.5.3 Functionality testing to verify that the change does not adversely impact the security of the system.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;">6.4.5.3.a For each sampled change, verify that functionality testing is performed to verify that the change does not adversely impact the security of the system.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each change from 6.4.5.b, describe how the changes were traced back to the identified related change control documentation to verify that the change control documentation for each sampled change includes evidence that functionality testing is performed to verify that the change does not adversely impact the security of the system.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">6.4.5.3.b For custom code changes, verify that all updates are tested for compliance with PCI DSS Requirement 6.5 before being deployed into production.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, identify the sample of custom code changes and the related change control documentation selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>   
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the custom code changes were traced back to the identified related change control documentation to verify that the change control documentation for each sampled custom code change includes evidence that all updates are tested for compliance with PCI DSS Requirement 6.5 before being deployed into production.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.4.5.4 Back-out procedures.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
      <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">6.4.5.4 Verify that back-out procedures are prepared for each sampled change.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each change from 6.4.5.b, describe how the changes were traced back to the identified related change control documentation to verify that back-out procedures are prepared for each sampled change and present in the change control documentation for each sampled change.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5 Address common coding vulnerabilities in software-development processes as follows:</p>
              
             <li>  Train developers in secure coding techniques, including how to avoid common coding vulnerabilities, and understanding how sensitive data is handled in memory.           
             </li><br />
              <li> Develop applications based on secure coding guidelines.</li><br />
               <em>
             Note: The vulnerabilities listed at 6.5.1 through 6.5.10 were current with industry best practices when this version of PCI DSS was published. However, as industry best practices for vulnerability management are updated (for example, the OWASP Guide, SANS CWE Top 25, CERT Secure Coding, etc.), the current best practices must be used for these requirements.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>        
      <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">6.5.a Examine software development policies and procedures to verify that training in secure coding techniques is required for developers, based on industry best practices and guidance.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that training in secure coding techniques is required for developers.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the industry best practices and guidance that training is based on.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">6.5.b Interview a sample of developers to verify that they are knowledgeable in secure coding techniques</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the developers interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to verify that they are knowledgeable in secure coding techniques.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">6.5.c Examine records of training to verify that software developers received training on secure coding techniques, including how to avoid common coding vulnerabilities, and understanding how sensitive data is handled in memory.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the records of training that were examined to verify that software developers received training on secure coding techniques, including how to avoid common coding vulnerabilities, and understanding how sensitive data is handled in memory.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th rowspan="2" align="left" valign="middle"  style="background:#ffffff;">6.5.d. Verify that processes are in place to protect applications from, at a minimum, the following vulnerabilities:</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the software-development policies and procedures examined to verify that processes are in place to protect applications from, at a minimum, the following vulnerabilities:</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed to verify that processes are in place to protect applications from, at a minimum, the following vulnerabilities:</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="54" colspan="8" align="left" valign="middle"  style="background:#e8f3dc;"><p>Note: Requirements 6.5.1 through 6.5.6, below, apply to all applications (internal or external):</p></th>        
    </tr>     
      <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5.1 Injection flaws, particularly SQL injection. Also consider OS Command Injection, LDAP and XPath injection flaws as well as other injection flaws.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
     <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;"><p>6.5.1 Examine software-development policies and procedures and interview responsible personnel to verify that injection flaws are addressed by coding techniques that include:  </p>
                <br /> 
                 <li>Validating input to verify user data cannot modify meaning of commands and queries.</li><br />
             <li>Utilizing parameterized queries.</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that injection flaws are addressed by coding techniques that include:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Validating input to verify user data cannot modify meaning of commands and queries.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Utilizing parameterized queries.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">
               6.5.2 Buffer overflow. 
      </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
     <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;"><p>6.5.2 Examine software-development policies and procedures and interview responsible personnel to verify that buffer overflows are addressed by coding techniques that include:</p>
              <br />
               <li> Validating buffer boundaries.</li> 
               <br />
             <li>Truncating input strings.</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that buffer overflows are addressed by coding techniques that include:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Validating buffer boundaries. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Truncating input strings.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5.3 Insecure cryptographic storage.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
     <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;"><p>6.5.3 Examine software-development policies and procedures and interview responsible personnel to verify that insecure cryptographic storage is addressed by coding techniques that:</p>   <br />
               <li> Prevent cryptographic flaws.</li><br />
             <li>Use strong cryptographic algorithms and keys.</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that insecure cryptographic storage is addressed by coding techniques that:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Prevent cryptographic flaws</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Use strong cryptographic algorithms and keys.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5.4	Insecure communications.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
     <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">6.5.4 Examine software-development policies and procedures and interview responsible personnel to verify that insecure communications are addressed by coding techniques that properly authenticate and encrypt all sensitive communications.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that insecure communications are addressed by coding techniques that properly:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Authenticate all sensitive communications.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Encrypt all sensitive communications.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5.5 Improper error handling.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
     <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">6.5.5 Examine-software development policies and procedures and interview responsible personnel to verify that improper error handling is addressed by coding techniques that do not leak information via error messages (for example, by returning generic rather than specific error details).</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that improper error handling is addressed by coding techniques that do not leak information via error messages.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5.6 All &quot;high risk&quot; vulnerabilities identified in the vulnerability identification process (as defined in PCI DSS Requirement 6.1). </p></th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>     
     <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">6.5.6 Examine software-development policies and procedures and interview responsible personnel to verify that coding techniques address any &quot;high risk&quot; vulnerabilities that could affect the application, as identified in PCI DSS Requirement 6.1.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that applications are not vulnerable to &quot;High&quot; vulnerabilities, as identified in PCI DSS Requirement 6.1.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="8" align="left" valign="middle"  style="background:#e8f3dc;"><p>Note: Requirements 6.5.7 through 6.5.10, below, apply to web applications and application interfaces (internal or external):</p></th>   
    </tr> 
      <tr>
         <th height="26" colspan="2" align="left" valign="middle"  style="background:#ffffff;"><p>Identify whether web applications and application interfaces are present. (yes/no) </p>
           <p><br />
             <em>If &quot;no,&quot; mark the below 6.5.8-6.5.11 as &quot;Not Applicable.&quot;</em></p>
           <p><em><br />
         If &quot;yes,&quot; complete the following:</em></p></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5.7	Cross-site scripting (XSS).</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>         
     <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;"><p>6.5.7 Examine software-development policies and procedures and interview responsible personnel to verify that cross-site scripting (XSS) is addressed by coding techniques that include:</p>
             <li>Validating all parameters before inclusion.</li><br />
             <li>Utilizing context-sensitive escaping.</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that cross-site scripting (XSS) is addressed by coding techniques that include:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Validating all parameters before inclusion</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Utilizing context-sensitive escaping.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5.8 Improper access control (such as insecure direct object references, failure to restrict URL access, directory traversal, and failure to restrict user access to functions).</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>           
    <tr>
         <th rowspan="5" align="left" valign="middle"  style="background:#ffffff;"><p>6.5.8 Examine software-development policies and procedures and interview responsible personnel to verify that improper access control—such as insecure direct object references, failure to restrict URL access, and directory traversal—is addressed by coding technique that include:</p>
           <br />         
           <li>Proper authentication of users.</li> 
           <br />
          <li> Sanitizing input.
           Not exposing internal object references to users.</li><br />
         <li>User interfaces that do not permit access to unauthorized functions.</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that improper access control is addressed by coding techniques that include:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Proper authentication of users.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Sanitizing input.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Not exposing internal object references to users.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>User interfaces that do not permit access to unauthorized functions.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5.9 Cross-site request forgery (CSRF).</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
     <tr>
             <th align="left" valign="middle"  style="background:#ffffff;">6.5.9 Examine software development policies and procedures and interview responsible personnel to verify that cross-site request forgery (CSRF) is addressed by coding techniques that ensure applications do not rely on authorization credentials and tokens automatically submitted by browsers.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that cross-site request forgery (CSRF) is addressed by coding techniques that ensure applications do not rely on authorization credentials and tokens automatically submitted by browsers.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.5.10 Broken authentication and session management.<br />
               <em>Note: Requirement 6.5.10 is a best practice until June 30, 2015, after which it becomes a requirement.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>       
     <tr>
             <th rowspan="6" align="left" valign="middle"  style="background:#ffffff;"><p>6.5.10 Examine software development policies and procedures and interview responsible personnel to verify that broken authentication and session management are addressed via coding techniques that commonly include: </p>
               <br />              
               <li>  Flagging session tokens (for example cookies) as &quot;secure.&quot;</li><br />
               <li>Not exposing session IDs in the URL.<br />
             Incorporating appropriate time-outs and rotation of session IDs after a successful login.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Indicate whether this ROC is being completed prior to June 30, 2015. (yes/no)</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><p><em>If "yes" AND the assessed entity does not have this in place ahead of the requirement's effective date, mark the remainder of 6.5.10 as "Not Applicable.</em></p>
               <p><em>"
       If "no" OR if the assessed entity has this in place ahead of the requirement's effective date, complete the following:</em></p></th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interviews at 6.5.d, summarize the relevant interview details that confirm processes are in place, consistent with the software development documentation at 6.5.d, to ensure that broken authentication and session management are addressed via coding techniques that protect credentials and session IDs, including:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Flagging session tokens (for example cookies) as &quot;secure.&quot;</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Not exposing session IDs in the URL.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Implementing appropriate time-outs and rotation of session IDs after a successful login</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.6 For public-facing web applications, address new threats and vulnerabilities on an ongoing basis and ensure these applications are protected against known attacks by either of the following methods:</p>
               <br />
               <li>Reviewing public-facing web applications via manual or automated application vulnerability security assessment tools or methods, at least annually and after any changes.</li>
                 <p><br />
                 <em>Note: This assessment is not the same as the vulnerability scans performed for Requirement 11.2.</em></p>
                 <br />
             <li>Installing an automated technical solution that detects and prevents web-based attacks (for example, a web-application firewall) in front of public-facing web applications, to continually check all traffic.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
     <tr>
             <th rowspan="23" align="left" valign="top"  style="background:#ffffff;">6.6 For public-facing web applications, ensure that either one of the following methods is in place as follows: 
             <li>Examine documented processes, interview personnel, and examine records of application security assessments to verify that public-facing web applications are reviewed—using either manual or automated vulnerability security assessment tools or methods—as follows:</li>
             <br />
             <li>At least annually. </li>
            
             <br />
             <li>After any changes.</li><br />
             
             <li>By an organization that specializes in application security.<br />
             </li>
             <br />
              <li>That, at a minimum, all vulnerabilities in Requirement 6.5 are included in the assessment.<br />
              </li>
              <br />
               <li>That all vulnerabilities are corrected.<br />
               </li>
               <br />
                <li>That the application is re-evaluated after the corrections.</li>
                <br />
                 <li>Examine the system configuration settings and interview responsible personnel to verify that an automated technical solution that detects and prevents web-based attacks (for example, a web-application firewall) is in place as follows: </li>
                 <br />
                  <li>Is situated in front of public-facing web applications to detect and prevent web-based attacks.</li>
                  <br />
                  <li>Is actively running and up-to-date as applicable.<br />
                  Is generating audit logs</li>
                  <br />
                  <li>Is generating audit logs.</li><br />
                 
                  <li>Is configured to either block web-based attacks, or generate an alert.<br />
                  </li>
                  
             </th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each public-facing web application, identify which of the two methods are implemented: </li><br />
            <li>Web application vulnerability security assessments, AND/OR </li>
            <br />
          <li>Automated technical solution that detects and prevents web-based attacks, such as web application firewalls.</li>
            </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em> 
             If application vulnerability security assessments are indicated above:	 
       </em></th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the tools and/or methods used (manual or automated, or a combination of both).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the organization(s) confirmed to specialize in application security that is performing the assessments.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented processes that were examined to verify that public-facing web applications are reviewed using the tools and/or methods indicated above, as follows:</li><br />
             <li>At least annually.</li>
             <br />
             <li>After any changes.<br />
             </li>
             <br />
             <li>By an organization that specializes in application security.</li>
             <br />
             <li>That, at a minimum, all vulnerabilities in Requirement 6.5 are included in the assessment.</li>
             <br />
             <li>That all vulnerabilities are corrected</li>
             <br />
             <li>That the application is re-evaluated after the corrections.</li>          
             </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm that public-facing web applications are reviewed, as follows:</li><br />
             <li>At least annually.</li>
             <br />
             <li>After any changes.<br />
             </li>
             <br />
             <li>By an organization that specializes in application security.</li>
             <br />
             <li>That, at a minimum, all vulnerabilities in Requirement 6.5 are included in the assessment.</li>
             <br />
             <li>That all vulnerabilities are corrected</li>
             <br />
             <li>That the application is re-evaluated after the corrections.</li>            
             </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the records of application security assessments examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how the records of application security assessments were examined to verify that public-facing web applications are reviewed as follows</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>At least annually</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>After any changes.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>By an organization that specialized in application security.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>That at a minimum, all vulnerabilities in requirement 6.5 are included in the assessment.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>That all vulnerabilities are corrected.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>That the application is re-evaluated after the corrections.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>If an automated technical solution that detects and prevents web-based attacks (for example, a web-application firewall) is indicated above:</em></th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the automated technical solution in use that detects and prevents web-based attacks.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm that the above automated technical solution in use to detect and prevent web-based attacks is in place as follows:</li><br />
             <li>Is situated in front of public-facing web applications to detect and prevent web-based attacks.</li><br />
             <li>Is actively running and up-to-date as applicable.</li><br />
             <li>Is generating audit logs. </li><br />
             <li>Is configured to either block web-based attacks, or generate an alert. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the system configuration settings examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how the system configuration settings were examined to verify that the above automated technical solution is use to detect and prevent web-based attacks is in place as follows:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Is situated in front of public-facing web applications to detect and prevent web-based attacks.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Is actively running and up-to-date as applicable.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Is generating audit logs. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Is configured to either block web-based attacks, or generate an alert.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>6.7 Ensure that security policies and operational procedures for developing and maintaining secure systems and applications are documented, in use, and known to all affected parties.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
<tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;"><p>6.7 Examine documentation and interview personnel to verify that security policies and operational procedures for developing and maintaining secure systems and applications are:</p>
            <li>Documented, </li>
            <br />
            <li>In use, and </li>
            <br />
            <li>Known to all affected parties.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that security policies and operational procedures for developing and maintaining secure systems and applications are documented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that the above documented security policies and operational procedures for developing and maintaining secure systems and applications are: </li><br />
             <li>In use<br />
             </li>
             <br />
             <li>Known to all affected parties</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
   </thead>
</table>
<h3>Implement Strong Access Control Measures </h3>
<strong><em>Requirement 7:	Restrict access to cardholder data by business need to know</em>   </strong>
<table width="100%">
<thead>
 <tr>
 <th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
    </tr>
           <tr>
             <th valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
          
            <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.1 Limit access to system components and cardholder data to only those individuals whose job requires such access.</p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
    <tr>
             <th align="left" valign="top"  style="background:#ffffff;"><p>7.1.a Examine written policy for access control, and verify that the policy incorporates 7.1.1 through 7.1.4 as follows: </p>
             <li>Defining access needs and privilege assignments for each role.</li>
             <Br />
             <li>Restriction of access to privileged user IDs to least privileges necessary to perform job responsibilities.</li>
             <Br />
             <li>Assignment of access based on individual personnel's job classification and function.</li>
             <Br />
             <li>Documented approval (electronically or in writing) by authorized parties for all access, including listing of specific privileges approved.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the written policy for access control that was examined to verify the policy incorporates 7.1.1 through 7.1.4 as follows:</li><br />
      <li>Defining access needs and privilege assignments for each role.</li><br />
      <li>Restriction of access to privileged user IDs to least privileges necessary to perform job responsibilities.</li><br />
      <li>Assignment of access based on individual personnel's job classification and function .</li><br />
      <li>Documented approval (electronically or in writing) by authorized parties for all access, including listing of specific privileges approved.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.1.1 Define access needs for each role, including:</p>
            <li>System components and data resources that each role needs to access for their job function.</li><br />
            <li> Level of privilege required (for example, user, administrator, etc.) for accessing resources.</li></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
<tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;"><p>7.1.1 Select a sample of roles and verify access needs for each role are defined and include:</p>
             <li>System components and data resources that each role needs to access for their job function.</li>
             <br />
             <li>Identification of privilege necessary for each role to perform their job function.</li>
            
             </th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the selected sample of roles for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each role in the selected sample, describe how the role was examined to verify access needs for each role are defined and include:</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>System components and data resources that each role needs to access for their job function.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identification of privilege necessary for each role to perform their job function.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.1.2 Restrict access to privileged user IDs to least privileges necessary to perform job responsibilities.</p>
            
            
            </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;"><p>7.1.2.a Interview personnel responsible for assigning access to verify that access to privileged user IDs is:</p>
            <li>Assigned only to roles that specifically require such privileged access.</li><br />
            <li>Restricted to least privileges necessary to perform job responsibilities.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm that access to privileged user IDs is:</li><br />
             <li>Assigned only to roles that specifically require such privileged access.</li><br />
             <li>Restricted to least privileges necessary to perform job responsibilities.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;"><p>7.1.2.b Select a sample of user IDs with privileged access and interview responsible management personnel to verify that privileges assigned are:</p>
            <li>Necessary for that individual's job function.</li><br />
            <li>Restricted to least privileges necessary to perform job responsibilities. </li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of user IDs with privileged access selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible management personnel interviewed to confirm that privileges assigned are:</li><br />
             <li>Necessary for that individual's job function.</li><br />
             <li>Restricted to least privileges necessary to perform job responsibilities.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th rowspan="3" align="left" valign="middle"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interview, summarize the relevant details discussed to confirm that privileges assigned to each user ID in the selected sample are:</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Necessary for that individual's job function.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Restricted to least privileges necessary to perform job responsibilities.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.1.3 Assign access based on individual personnel's job classification and function.</p>
            
            
            </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>       
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">7.1.3 Select a sample of user IDs and interview responsible management personnel to verify that privileges assigned are based on that individual's job classification and function. </th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of user IDs examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible management personnel interviewed who confirm that privileges assigned are based on that individual's job classification and function.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to confirm that privileges assigned to each user ID in the selected sample are based on an individual's job classification and function.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.1.4 Require documented approval by authorized parties specifying required privileges.</p>
            
            
            </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
      <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;"><p>7.1.4 Select a sample of user IDs and compare with documented approvals to verify that:</p>
             <li>Documented approval exists for the assigned privileges.</li>
             <br />
             <li>That specified privileges match the roles assigned to the individual.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of user IDs examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how each item in the sample of user IDs was compared with documented approvals to verify that:</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>The approval was by authorized parties.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>That specified privileges match the roles assigned to the individual.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="8" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.2 Establish an access control system for systems components that restricts access based on a user's need to know, and is set to &quot;deny all&quot; unless specifically allowed.</p>
               <p>This access control system must include the following:</p>
            
            
            </th>
            
    </tr>      
     <tr>
             <th height="54" colspan="8" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.2 Examine system settings and vendor documentation to verify that an access control system is implemented as follows:</p>
            
            
            </th>
           
    </tr>      
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p> 
               7.2.1 Coverage of all system components. 
             </p>
            
            
            </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>       
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">7.2.1 Confirm that access control systems are in place on all system components.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify vendor documentation examined.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how system settings were examined with the vendor documentation to verify that access control systems are in place on all system components.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.2.2 Assignment of privileges to individuals based on job classification and function.</p>          
      </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>        
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;">7.2.2 Confirm that access control systems are configured to enforce privileges assigned to individuals based on job classification and function.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how system settings were examined with the vendor documentation at 7.2.1 to verify that access control systems are configured to enforce privileges assigned to individuals based on job classification and function.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.2.3 Default &quot;deny-all&quot; setting.</p>          
      </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>       
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;">7.2.3 Confirm that the access control systems have a default &quot;deny-all&quot; setting.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how system settings were examined with vendor documentation at 7.2.1 to verify that access control systems have a default &quot;deny-all&quot; setting.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="54" colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>7.3 Ensure that security policies and operational procedures for restricting access to cardholder data are documented, in use, and known to all affected parties.</p>          
            </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>      
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;"><p>7.3 Examine documentation and interview personnel to verify that security policies and operational procedures for restricting access to cardholder data are:</p>
            <li>Documented, </li>
            <br />
            <li>In use, and </li>
            <br />
            <li>Known to all affected parties.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that security policies and operational procedures for restricting access to cardholder data are documented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that the above documented security policies and operational procedures for restricting access to cardholder data are:</li><br />
             <li>In use</li>
             <br />
             <li>Known to all affected parties</li>
           </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
  </thead>
</table>
<h3><em>Requirement 8:	Identify and authenticate access to system components </em></h3>
   <table width="100%">
   <thead>
   <tr>
   <th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
    </tr>
           <tr>
             <th valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
          
            <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1 Define and implement policies and procedures to ensure proper user identification management for non-consumer users and administrators on all system components as follows:</p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
              <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.1.a Review procedures and confirm they define processes for each of the items below at 8.1.1 through 8.1.8.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the written procedures for user identification management examined to verify processes are defined for each of the items below at 8.1.1 through 8.1.8:</li><br />
             <li>Assign all users a unique ID before allowing them to access system components or cardholder data.</li>
             <br />
             <li>Control addition, deletion, and modification of user IDs, credentials, and other identifier objects.</li>
             <br />
             <li>Immediately revoke access for any terminated users.</li>
             <br />
             <li>Remove/disable inactive user accounts at least every 90 days</li>
             <br />
             <li>Manage IDs used by vendors to access, support, or maintain system components via remote access as follows:</li>
             <br />
              <li>Enabled only during the time period needed and disabled when not in use. <br />
               Monitored when in use.</li>
              <br />
               <li>Limit repeated access attempts by locking out the user ID after not more than six attempts.</li>
               <br />
                <li>Set the lockout duration to a minimum of 30 minutes or until an administrator enables the user ID.</li>
                <br />
                <li>If a session has been idle for more than 15 minutes, require the user to re-authenticate to re-activate the terminal or session</li>               
                </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th colspan="8" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1.b Verify that procedures are implemented for user identification management, by performing the following:</p>                          
         </th>
            
     </tr>
               <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1.1 Assign all users a unique ID before allowing them to access system components or cardholder data.</p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             </tr>
              <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.1.1 Interview administrative personnel to confirm that all users are assigned a unique ID for access to system components or cardholder data.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible administrative personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to confirm that all users are assigned a unique ID for access to system components or cardholder data.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
<tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1.2 Control addition, deletion, and modification of user IDs, credentials, and other identifier objects.</p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
              <tr>
                <th rowspan="5" align="left" valign="top"  style="background:#ffffff;">8.1.2 For a sample of privileged user IDs and general user IDs, examine associated authorizations and observe system settings to verify each user ID and privileged user ID has been implemented with only the privileges specified on the documented approval.</th>
                <th height="26" align="left" valign="top"  style="background:#ffffff;">Identify the sample of privileged user IDs selected for this testing procedure.</th>
                <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
              </tr>
              <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of general user IDs selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how observed system settings and the associated authorizations documented for the user IDs were compared to verify that each ID has been implemented with only the privileges specified on the documented approval:></th>
     </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the sample of privileged user IDs.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the sample of general user IDs.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1.3 Immediately revoke access for any terminated users.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
              <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">8.1.3.a Select a sample of users terminated in the past six months, and review current user access lists—for both local and remote access—to verify that their IDs have been deactivated or removed from the access lists.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of users terminated in the past six months selected. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the current user access lists for local access were reviewed to verify that the sampled user IDs have been deactivated or removed from the access lists.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the current user access lists for remote access were reviewed to verify that the sampled user IDs have been deactivated or removed from the access lists.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.1.3.b Verify all physical authentication methods—such as, smart cards, tokens, etc.—have been returned or deactivated.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the sample of users terminated in the past six months at 8.1.3.a, describe how it was determined which, if any, physical authentication methods, the terminated users had access to prior to termination.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the physical authentication method(s) for the terminated employees were verified to have been returned or deactivated.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1.4 Remove/disable inactive user accounts at least every 90 days.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
          <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.1.4 Observe user accounts to verify that any inactive accounts over 90 days old are either removed or disabled.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how user accounts were observed to verify that any inactive accounts over 90 days old are either removed or disabled.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1.5 Manage IDs used by vendors to access, support, or maintain system components via remote access as follows:</p>
        <li>Enabled only during the time period needed and disabled when not in use.</li> <br />
         <li>Monitored when in use.</li>                         
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
     <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;"><p>8.1.5.a Interview personnel and observe processes for managing accounts used by vendors to access, support, or maintain system components to verify that accounts used by vendors for remote access are:</p>
            <li>Disabled when not in use.</li>
            <br />
            <li>Enabled only when needed by the vendor, and disabled when not in use.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed who confirm that accounts used by vendors for remote access are:</li><br />
       <li>Disabled when not in use.<br />
       </li>
       <br />
<li>Enabled only when needed by the vendor, and disabled when not in use</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how processes for managing accounts used by vendors to access, support, or maintain system components were observed to verify that accounts used by vendors for remote access are:</th>
     </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Disabled when not in use.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Enabled only when needed by the vendor, and disabled when not in use.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">
             </th>
    </tr> 
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.1.5.b Interview personnel and observe processes to verify that vendor remote access accounts are monitored while being used.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed who confirm that accounts used by vendors for remote access are monitored while being used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how processes for managing accounts used by vendors to access, support, or maintain system components were observed to verify that vendor remote access accounts are monitored while being used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1.6 Limit repeated access attempts by locking out the user ID after not more than six attempts.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.1.6.a For a sample of system components, inspect system configuration settings to verify that authentication parameters are set to require that user accounts be locked out after not more than six invalid logon attempts.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how system configuration settings were inspected to verify that authentication parameters are set to require that user accounts be locked after not more than six invalid logon attempts.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.1.6.b Additional procedure for service providers: Review internal processes and customer/user documentation, and observe implemented processes to verify that non-consumer user accounts are temporarily locked-out after not more than six invalid access attempts.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For service providers only, identify the documented internal processes and customer/user documentation reviewed to verify that non-consumer user accounts are temporarily locked-out after not more than six invalid access attempts.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the implemented processes that were observed to verify that non-consumer user accounts are temporarily locked-out after not more than six invalid access attempts.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1.7 Set the lockout duration to a minimum of 30 minutes or until an administrator enables the user ID.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
    <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.1.7 For a sample of system components, inspect system configuration settings to verify that password parameters are set to require that once a user account is locked out, it remains locked for a minimum of 30 minutes or until a system administrator resets the account</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how system configuration settings were inspected to verify that password parameters are set to require that once a user account is locked out, it remains locked for a minimum of 30 minutes or until a system administrator resets the account.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.1.8 If a session has been idle for more than 15 minutes, require the user to re-authenticate to re-activate the terminal or session.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
    <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.1.8 For a sample of system components, inspect system configuration settings to verify that system/session idle time out features have been set to 15 minutes or less.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how system configuration settings were inspected to verify that system/session idle time out features have been set to 15 minutes or less.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.2 In addition to assigning a unique ID, ensure proper user-authentication management for non-consumer users and administrators on all system components by employing at least one of the following methods to authenticate all users:</p>
        <li>Something you know, such as a password or passphrase.</li><br />
       <li> Something you have, such as a token device or smart card.</li><br />
         <li>Something you are, such as a biometric.</li>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
     <tr>
             <th rowspan="5" align="left" valign="top"  style="background:#ffffff;"><p>8.2 To verify that users are authenticated using unique ID and additional authentication (for example, a password/phrase) for access to the cardholder data environment, perform the following:</p><br />
              
               <li>Examine documentation describing the authentication method(s) used.</li>
             <br />
             <li>For each type of authentication method used and for each type of system component, observe an authentication to verify authentication is functioning consistent with documented authentication method(s).</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document describing the authentication method(s) used that was reviewed to verify that the methods require users to be authenticated using a unique ID and additional authentication for access to the cardholder data environment.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the authentication methods used (for example, a password or passphrase, a token device or smart card, a biometric, etc.) for each type of system component.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>For each type of authentication method used and for each type of system component, describe how the authentication method was observed to be:</em></th>
     </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Used for access to the cardholder data environment.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Functioning consistently with the documented authentication method(s).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.2.1 Using strong cryptography, render all authentication credentials (such as passwords/phrases) unreadable during transmission and storage on all system components.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
    <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;">8.2.1.a Examine vendor documentation and system configuration settings to verify that passwords are protected with strong cryptography during transmission and storage.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the vendor documentation reviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li><em>For each item in the sample, describe how system configuration settings were examined to verify that passwords are protected with strong cryptography during transmission.</em></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li><em>For each item in the sample, describe how system configuration settings were examined to verify that passwords are protected with strong cryptography during storage.</em></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.2.1.b For a sample of system components, examine password files to verify that passwords are unreadable during storage.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li><em>For each item in the sample at 8.2.1.a, describe how password files were examined to verify that passwords are unreadable during storage.</em></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.2.1.c For a sample of system components, examine data transmissions to verify that passwords are unreadable during transmission.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li><em>For each item in the sample at 8.2.1.a, describe how password files were examined to verify that passwords are unreadable during transmission.</em></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.2.1.d Additional procedure for service providers: Observe password files to verify that customer passwords are unreadable during storage.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li><em>Additional procedure for service providers: for each item in the sample at 8.2.1.a, describe how password files were examined to verify that customer passwords are unreadable during storage.</em></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.2.1.e Additional procedure for service providers: Observe data transmissions to verify that customer passwords are unreadable during transmission.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li><em>Additional procedure for service providers: for each item in the sample at 8.2.1.a, describe how password files were examined to verify that customer passwords are unreadable during transmission.</em></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.2.2 Verify user identity before modifying any authentication credential—for example, performing password resets, provisioning new tokens, or generating new keys.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
     <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">8.2.2 Examine authentication procedures for modifying authentication credentials and observe security personnel to verify that, if a user requests a reset of an authentication credential by phone, e-mail, web, or other non-face-to-face method, the user's identity is verified before the authentication credential is modified.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document examined to verify that authentication procedures for modifying authentication credentials define that if a user requests a reset of an authentication credential by a non-face-to-face method, the user's identity is verified before the authentication credential is modified.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the non-face-to-face methods used for requesting password resets.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how security personnel were observed to verify that if a user requests a reset of an authentication credential by a non-face-to-face method, the user's identity is verified before the authentication credential is modified.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.2.3 Passwords/phrases must meet the following:</p>
         <li>Require a minimum length of at least seven characters.</li><br />
        <li>Contain both numeric and alphabetic characters.</li><br />
        
         <p>Alternatively, the passwords/phrases must have complexity and strength at least equivalent to the parameters specified above.           <br />
         </p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
    <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;"><p>8.2.3.a For a sample of system components, inspect system configuration settings to verify that user password parameters are set to require at least the following strength/complexity:</p><br />
            <li>Require a minimum length of at least seven characters.</li><br />
             <li>Contain both numeric and alphabetic characters</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>For each item in the sample, describe how system configuration settings were inspected to verify that user password parameters are set to require at least the following strength/complexity:</em></th>
     </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Require a minimum length of at least seven characters.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Contain both numeric and alphabetic characters.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th align="left" valign="top"  style="background:#ffffff;"><p>8.2.3.b Additional procedure for service providers: Review internal processes and customer/user documentation to verify that non-consumer user passwords are required to meet at least the following strength/complexity:</p>
           <li>Require a minimum length of at least seven characters.</li><br />
            <li> Contain both numeric and alphabetic characters.</li>         </th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For service providers only: Identify the documented internal processes and customer/user documentation reviewed to verify that non-consumer user passwords are required to meet at least the following strength/complexity:</li><br>
             <li>A minimum length of at least seven characters.</li><br />
             <li>Non-consumer user passwords are required to contain both numeric and alphabetic characters.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how internal processes were reviewed to verify that non-consumer user passwords are required to meet at least the following strength/complexity:</th>
     </tr> 
    <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>A minimum length of at least seven characters.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Non-consumer user passwords are required to contain both numeric and alphabetic characters.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.2.4 Change user passwords/passphrases at least every 90 days.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
    <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.2.4.a For a sample of system components, inspect system configuration settings to verify that user password parameters are set to require users to change passwords at least every 90 days.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how system configuration settings were inspected to verify that user password parameters are set to require users to change passwords at least every 90 days.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;"><p>8.2.4.b Additional procedure for service providers: Review internal processes and customer/user documentation to verify that:</p>
             <li>Non-consumer user passwords are required to change periodically; and </li><br />
             Non-consumer users are given guidance as to when, and under what circumstances, passwords must change.</p></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li><em>For service providers only, identify the documented internal processes and customer/user documentation reviewed to verify that:</em></li><br />
             <li>Non-consumer user passwords are required to change periodically; and </li><br />
             <li>Non-consumer users are given guidance as to when, and under what circumstances, passwords must change.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how internal processes were reviewed to verify that:</th>
             </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Non-consumer user passwords are required to change periodically; and </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Non-consumer users are given guidance as to when, and under what circumstances, passwords must change.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
   
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.2.5 Do not allow an individual to submit a new password/phrase that is the same as any of the last four passwords/phrases he or she has used.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.2.5.a For a sample of system components, obtain and inspect system configuration settings to verify that password parameters are set to require that new passwords cannot be the same as the four previously used passwords.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how system configuration settings were inspected to verify that password parameters are set to require that new passwords cannot be the same as the four previously used passwords.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.2.5.b Additional Procedure for service providers, review internal processes and customer/user documentation to verify that new non-consumer user passwords cannot be the same as the previous four passwords.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For service providers only, identify the documented internal processes and customer/user documentation reviewed to verify that new non-consumer user passwords cannot be the same as the previous four passwords.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how internal processes were reviewed to verify that new non-consumer user passwords cannot be the same as the previous four passwords.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.2.6 Set passwords/phrases for first-time use and upon reset to a unique value for each user, and change immediately after the first use.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.2.6 Examine password procedures and observe security personnel to verify that first-time passwords for new users, and reset passwords for existing users, are set to a unique value for each user and changed after first use.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented password procedures examined to verify the procedures define that:</li><br />
              <li> First-time passwords must be set to a unique value for each user.</li><br />
              <li> First-time passwords must be changed after the first use.</li><br />
             <li>  Reset passwords must be set to a unique value for each user.</li><br />
            <li> Reset passwords must be changed after the first use.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how security personnel were observed to:</th>
             </tr> 
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Set first-time passwords to a unique value for each new user.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Set first-time passwords to be changed after first use.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Set reset passwords to a unique value for each existing user.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Set reset passwords to be changed after first use.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.3 Incorporate two-factor authentication for remote network access originating from outside the network, by personnel (including users and administrators) and all third parties, (including vendor access for support or maintenance). </p>
         <p><em>Note: Two-factor authentication requires that two of the three authentication methods (see Requirement 8.2 for descriptions of authentication methods) be used for authentication. Using one factor twice (for example, using two separate passwords) is not considered two-factor authentication.</em></p>
         <p><em>Examples of two-factor technologies include remote authentication and dial-in service (RADIUS) with tokens; terminal access controller access control system (TACACS) with tokens; and other technologies that facilitate two-factor authentication</em>.</p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>
     <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">8.3.a Examine system configurations for remote access servers and systems to verify two-factor authentication is required for:<br />
            <li>   All remote access by personnel.</li><br />
            <li> All third-party/vendor remote access (including access to applications and system components for support or maintenance purposes)</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how system configurations for remote access servers and systems were examined to verify two-factor authentication is required for:</th>
     </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All remote access by personnel.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All third-party/vendor remote access (including access to applications and system components for support or maintenance purposes).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">8.3.b Observe a sample of personnel (for example, users and administrators) connecting remotely to the network and verify that at least two of the three authentication methods are used.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of personnel observed connecting remotely to the network selected.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how two-factor authentication was observed to be required for remote access to the network.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify which two factors are used:</li><br />
               <li>Something you know</li><br />
              <li> Something you are</li><br />
            <li> Something you have</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.4 Document and communicate authentication procedures and policies to all users including:</p>  <br />
       <li>Guidance on selecting strong authentication credentials.<br />
       </li>
       <br />
       <li>Guidance for how users should protect their authentication credentials. </li>
       <br />
       <li>Instructions not to reuse previously used passwords.<br />
       </li>
       <br />
       <li>Instructions to change passwords if there is any suspicion the password could be compromised.</li>                        
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr> 
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.4.a Examine procedures and interview personnel to verify that authentication procedures and policies are distributed to all users.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented procedures examined to verify authentication procedures define that authentication procedures and policies are distributed to all users.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed who confirm that authentication procedures and policies are distributed to all users.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.4.b Review authentication procedures and policies that are distributed to users and verify they include:<br />
             <li>  Guidance on selecting strong authentication credentials.</li><br />
             <li>  Guidance for how users should protect their authentication credentials.</li><br />
              <li> Instructions for users not to reuse previously used passwords.</li><br />
            <li> Instructions to change passwords if there is any suspicion the password could be compromised.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented authentication procedures and policies that are distributed to users reviewed to verify they include:</li><br />
              <li> Guidance on selecting strong authentication credentials.</li><br />
             <li>  Guidance for how users should protect their authentication credentials.</li><br />
               <li>Instructions for users not to reuse previously used passwords.</li><br />
             That users should change passwords if there is any suspicion the password could be compromised</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.4.c Interview a sample of users to verify that they are familiar with authentication procedures and policies.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of users interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed that verify that the sampled users are familiar with authentication procedures and policies.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.5 Do not use group, shared, or generic IDs, passwords, or other authentication methods as follows:<br />
       </p>
         <li>Generic user IDs are disabled or removed.<br />
         </li>
       <br />
       <li>Shared user IDs do not exist for system administration and other critical functions.<br />
       </li>
       <br />
       <li>Shared and generic user IDs are not used to administer any system components.</li>                      
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr> 
      <tr>
             <th rowspan="5" align="left" valign="top"  style="background:#ffffff;"><p>8.5.a For a sample of system components, examine user ID lists to verify the following:</p><br />
             <li>Generic user IDs are disabled or removed.</li><br />
              <li> Shared user IDs for system administration activities and other critical functions do not exist.</li><br />
            <li> Shared and generic user IDs are not used to administer any system components.</li>.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each item in the sample, describe how user ID lists for the sample of system components were examined to verify that:</th>
     </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Generic user IDs are disabled or removed.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Shared user IDs for system administration activities and other critical functions do not exist.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Shared and generic user IDs are not used to administer any system components.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.5.b Examine authentication policies/procedures to verify that use of group and shared IDs and/or passwords or other authentication methods are explicitly prohibited.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented policies/procedures examined to verify authentication policies/procedures define that use of group and shared IDs and/or passwords or other authentication methods are explicitly prohibited.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.5.c Interview system administrators to verify that group and shared IDs and/or passwords or other authentication methods are not distributed, even if requested.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the system administrators interviewed who confirm that group and shared IDs and/or passwords or other authentication methods are not distributed, even if requested.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>8.5.1 Additional requirement for service providers: Service providers with remote access to customer premises (for example, for support of POS systems or servers) must use a unique authentication credential (such as a password/phrase) for each customer.</p>
         <p><em><br />
          This requirement is not intended to apply to shared hosting providers accessing their own hosting environment, where multiple customer environments are hosted.</em></p>
         <p><em><br />
          Note: Requirement 8.5.1 is a best practice until June 30, 2015, after which it becomes a requirement.</em></p>                          
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr> 
     <tr>
             <th rowspan="5" align="left" valign="top"  style="background:#ffffff;">8.5.1 Additional procedure for service providers: Examine authentication policies and procedures and interview personnel to verify that different authentication are used for access to each customer.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For service providers only, indicate whether this ROC is being completed prior to June 30, 2015. (yes/no)</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><p><em>If "yes" AND the assessed entity does not have this in place ahead of the requirement's effective date, mark this as "Not Applicable."
             </em></p>
        <p> <em>If "no" OR if the assessed entity has this in place ahead of the requirement's effective date, complete the following:</em></p></th>
     </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented procedures examined to verify that different authentication is used for access to each customer.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed to confirm that different authentication is used for access to each customer.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
       <th colspan="3" align="left" valign="top"  style="background:#e8f3dc;">
        <p> 8.6 Where other authentication mechanisms are used (for example, physical or logical security tokens, smart cards, certificates, etc.) use of these mechanisms must be assigned as follows:</p><br />
          <li> Authentication mechanisms must be assigned to an individual account and not shared among multiple accounts.</li><br />
       <li>Physical and/or logical controls must be in place to ensure only the intended account can use that mechanism to gain access.</li>
                                  
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>  
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;"><p>8.6.a Examine authentication policies and procedures to verify that procedures for using authentication mechanisms such as physical security tokens, smart cards, and certificates are defined and include:</p><br />
             <li>Authentication mechanisms are assigned to an individual account and not shared among multiple accounts.</li><br />
             <li>Physical and/or logical controls are defined to ensure only the intended account can use that mechanism to gain access.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented authentication policies and procedures examined to verify the procedures for using authentication mechanisms define that:</li><br />
             <li>Authentication mechanisms are assigned to an individual account and not shared among multiple accounts.</li><br />
             <li>Physical and/or logical controls are defined to ensure only the intended account can use that mechanism to gain access.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">8.6.b Interview security personnel to verify authentication mechanisms are assigned to an account and not shared among multiple accounts.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the security personnel interviewed who confirm that authentication mechanisms are assigned to an account and not shared among multiple accounts.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">8.6.c Examine system configuration settings and/or physical controls, as applicable, to verify that controls are implemented to ensure only the intended account can use that mechanism to gain access.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how system configuration settings and/or physical controls, as applicable, were examined to verify that controls are implemented to ensure only the intended account can use that mechanism to gain access.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="top"  style="background:#e8f3dc;">
        <p>8.7 All access to any database containing cardholder data (including access by applications, administrators, and all other users) is restricted as follows:
        </p>
        <br />
          <li>All user access to, user queries of, and user actions on databases are through programmatic methods.<br />
          </li>
          <br />
       <li>Only database administrators have the ability to directly access or query databases. </li><br />
       <li>Application IDs for database applications can only be used by the applications (and not by individual users or other non-application processes).</li>
      
                                  
       </th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>  
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">8.7.a Review database and application configuration settings and verify that all users are authenticated prior to access.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify all databases containing cardholder data.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how authentication is managed (for example, via application and/or database interfaces).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how database and/or application configuration settings were observed to verify that all users are authenticated prior to access.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th rowspan="9" align="left" valign="top"  style="background:#ffffff;">8.7.b Examine database and application configuration settings to verify that all user access to, user queries of, and user actions on (for example, move, copy, delete), the database are through programmatic methods only (for example, through stored procedures).</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>For each database from 8.7.a:</em></th>
             </tr> 
      <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how the database and application configuration settings were examined to verify that only programmatic methods are used for:</th>
     </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All user access to the database</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All use queries of the database</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All user actions on the database</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe the process observed to verify that only programmatic methods are used for:></th>
     </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All user access to the database</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All use queries of the database</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All user actions on the database</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">8.7.c Examine database access control settings and database application configuration settings to verify that user direct access to or queries of databases are restricted to database administrators.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>For each database from 8.7.a, describe how database application configuration settings were examined to verify that the following are restricted to only database administrators:</em></th>
     </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>User direct access to databases</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Queries of databases</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;">8.7.d Examine database access control settings, database application configuration settings, and the related application IDs to verify that application IDs can only be used by the applications (and not by individual users or other processes).</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><li><em>For each database from 8.7.a:</em></li></th>
             </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify applications with access to the database.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the implemented methods for ensuring that application IDs can only be used by the applications.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how database access control settings, database application configuration settings and related application IDs were examined together to verify that application IDs can only be used by the applications.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="top"  style="background:#e8f3dc;">
        <p>8.8 Ensure that security policies and operational procedures for identification and authentication are documented, in use, and known to all affected parties.</p>
</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
       <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
     </tr>    
    <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;"><p>8.8 Examine documentation interview personnel to verify that security policies and operational procedures for identification and authentication are:</p>
             <li>Documented, </li>
             <br />
               <li>In use, and </li>
               <br />
             <li>Known to all affected parties.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that security policies and operational procedures for identification and authentication are documented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that the above documented security policies and operational procedures for identification and authentication are:</li><br />
               <li>In use</li>
               <br />
             <li>Known to all affected parties</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     </thead>
</table>
<h3><em>Requirement 9:	Restrict physical access to cardholder data</em></h3>   
<table width="100%">
<thead>
 <tr>
 <th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
    </tr>
           <tr>
             <th valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
          
            <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.1 Use appropriate facility entry controls to limit and monitor physical access to systems in the cardholder data environment. </p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
 <tr>
             <th rowspan="8" align="left" valign="top"  style="background:#ffffff;"><p>9.1 Verify the existence of physical security controls for each computer room, data center, and other physical areas with systems in the cardholder data environment.</p><br />
              <li> Verify that access is controlled with badge readers or other devices including authorized badges and lock and key. </li><br />
            <li> Observe a system administrator's attempt to log into consoles for randomly selected systems in the cardholder environment and verify that they are &quot;locked&quot; to prevent unauthorized use.</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Identify and briefly describe all of the following with systems in the cardholder data environment:</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All computer rooms</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All data centers</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
 <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Any other physical areas</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For each area identified (add rows as needed), complete the following:</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the physical security controls to be in place, including authorized badges and lock and key.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the randomly selected systems in the cardholder environment for which a system administrator login attempt was observed.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how consoles for the randomly selected systems were observed to verify that they are &quot;locked&quot; when not in use to prevent unauthorized use.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
          <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.1.1 Use video cameras and/or access control mechanisms to monitor individual physical access to sensitive areas. Review collected data and correlate with other entries. Store for at least three months, unless otherwise restricted by law.</p>
               <p><em>Note: &quot;Sensitive areas&quot; refers to any data center, server room, or any area that houses systems that store, process, or transmit cardholder data. This excludes public-facing areas where only point-of-sale terminals are present, such as the cashier areas in a retail store.</em></p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">9.1.1.a Verify that video cameras and/or access control mechanisms are in place to monitor the entry/exit points to sensitive areas</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the video cameras and/or access control mechanisms observed to monitor the entry/exit points to sensitive areas.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">9.1.1.b Verify that video cameras and/or access control mechanisms are protected from tampering or disabling.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the video cameras and/or access control mechanisms were observed to be protected from tampering and/or disabling.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.1.1.c Verify that video cameras and/or access control mechanisms are monitored and that data from cameras or other mechanisms is stored for at least three months.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the video cameras and/or access control mechanisms were observed to be monitored.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how data from the cameras and/or access control mechanisms was observed to be stored for at least three months.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.1.2 Implement physical and/or logical controls to restrict access to publicly accessible network jacks.</p>
               <p><br />
                 <em>For example, network jacks located in public areas and areas accessible to visitors could be disabled and only enabled when network access is explicitly authorized. Alternatively, processes could be implemented to ensure that visitors are escorted at all times in areas with active network jacks.</em></p>
       </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.1.2 Interview responsible personnel and observe locations of publicly accessible network jacks to verify that physical and/or logical controls are in place to restrict access to publicly-accessible network jacks.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that physical and/or logical controls are in place to restrict access to publicly accessible network jacks.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the physical and/or logical controls observed at the locations of publicly accessible network jacks to verify the controls are in place restrict access.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.1.3 Restrict physical access to wireless access points, gateways, handheld devices, networking/communications hardware, and telecommunication lines.</p>
</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
     <tr>
             <th rowspan="6" align="left" valign="top"  style="background:#ffffff;">9.1.3 Verify that physical access to wireless access points, gateways, handheld devices, networking/communications hardware, and telecommunication lines is appropriately restricted.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how physical access was observed to be restricted to the following:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Wireless access points</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Wireless gateways</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Wireless handheld devices</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
    <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Network/communications hardware</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Telecommunication lines</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.2 Develop procedures to easily distinguish between onsite personnel and visitors, to include:</p><br />
               <li>Identifying new onsite personnel or visitors (for example, assigning badges).</li><br />
             <li>  Changes to access requirements.</li><br />
              <li> Revoking or terminating onsite personnel and expired visitor identification (such as ID badges).</li>
</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;"><p>9.2.a Review documented processes to verify that procedures are defined for identifying and distinguishing between onsite personnel and visitors.</p>
               <p>Verify procedures include the following:</p>
               <li>Identifying new onsite personnel or visitors (for example, assigning badges),</li>
               <br />
                 <li>Changing access requirements, and</li>
                 <br />
             <li>Revoking terminated onsite personnel and expired visitor identification (such as ID badges).</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented processes reviewed to verify that procedures are defined for identifying and distinguishing between onsite personnel and visitors, including the following:</li><br />
             <li>Identifying new onsite personnel or visitors (for example, assigning badges),</li>
             <br />
               <li>Changing access requirements, and</li>
               <br />
             <li>Revoking terminated onsite personnel and expired visitor identification (such as ID badges).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;"><p>9.2.b Observe processes for identifying and distinguishing between onsite personnel and visitors to verify that:</p><br />
              <li> Visitors are clearly identified, and </li><br />
            <li> It is easy to distinguish between onsite personnel and visitors.</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how processes for identifying and distinguishing between onsite personnel and visitors were observed to verify that:</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Visitors are clearly identified, and </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>It is easy to distinguish between onsite personnel and visitors.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.2.c Verify that access to the identification process (such as a badge system) is limited to authorized personnel.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document that defines that access to the identification process is limited to authorized personnel.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how access to the identification process was observed to be limited to authorized personnel.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;">9.2.d Examine identification methods (such as ID badges) in use to verify that they clearly identify visitors and it is easy to distinguish between onsite personnel and visitors.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Briefly describe the identification method in use for onsite personnel and visitors.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how the identification methods were examined to verify that:</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>The identification method(s) clearly identify visitors.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>It is easy to distinguish between onsite personnel and visitors.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.3 Control physical access for onsite personnel to the sensitive areas as follows:   </p>
         <br />
         <li>Access must be authorized and based on individual job function.</li>
   <br />
               <li>Access is revoked immediately upon termination, and all physical access mechanisms, such as keys, access cards, etc., are returned or disabled. </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>   
<tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;"><p>9.3.a For a sample of onsite personnel with physical access to the CDE, interview responsible personnel and observe access control lists to verify that:</p><br />
             <li>Access to the CDE is authorized. </li><br />
            <li>Access is required for the individual's job function.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of onsite personnel with physical access to the CDE interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For all items in the sample, describe how responsible personnel were interviewed and access control lists observed to verify that:</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Access to the CDE is authorized. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Access is required for the individual's job function.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">9.3.b Observe personnel access the CDE to verify that all personnel are authorized before being granted access.</th>
             <th height="29" align="left" valign="top"  style="background:#ffffff;"><li>Describe how personnel accessing the CDE were observed to verify that all personnel are authorized before being granted access.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.3.c Select a sample of recently terminated employees and review access control lists to verify the personnel do not have physical access to the CDE.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of users recently terminated.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample, provide the name of the assessor who attests that the access control lists were reviewed to verify the personnel do not have physical access to the CDE.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="8" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.4 Implement procedures to identify and authorize visitors. </p>
         <p>Procedures should include the following: </p>        
       </th>          
    </tr>   
     <tr>
       <th colspan="8" align="left" valign="middle"  style="background:#e8f3dc;"><p> <br />
         9.4 Verify that visitor authorization and access controls are in place as follows: <br />
       </p></th>
            
   </tr>   
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.4.1 Visitors are authorized before entering, and escorted at all times within, areas where cardholder data is processed or maintained. </p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.4.1.a Observe procedures and interview personnel to verify that visitors must be authorized before they are granted access to, and escorted at all times within, areas where cardholder data is processed or maintained.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how visitor authorization processes were observed to verify that visitors: </li><br />
             <li>Must be authorized before they are granted access to areas where cardholder data is processed or maintained.</li><br />
             <li>Are escorted at all times within areas where cardholder data is processed and maintained.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify personnel interviewed who confirm that visitor authorization processes are in place so that visitors must be authorized before they are granted access to, and escorted at all times within, areas where cardholder data is processed or maintained.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">9.4.1.b Observe the use of visitor badges or other identification to verify that a physical token badge does not permit unescorted access to physical areas where cardholder data is processed or maintained.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the use of visitor badges or other identification was observed to verify that a physical token badge does not permit unescorted access to physical areas where cardholder data is processed or maintained.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.4.2 Visitors are identified and given a badge or other identification that expires and that visibly distinguishes the visitors from onsite personnel.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.4.2.a Observe people within the facility to verify the use of visitor badges or other identification, and that visitors are easily distinguishable from onsite personnel.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how people within the facility were observed to use visitor badges or other identification.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how visitors within the facility were observed to be easily distinguishable from onsite personnel.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">9.4.2.b Verify that visitor badges or other identification expire.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how visitor badges or other identification were verified to expire.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.4.3 Visitors are asked to surrender the badge or identification before leaving the facility or at the date of expiration.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">9.4.3 Observe visitors leaving the facility to verify visitors are asked to surrender their badge or other identification upon departure or expiration.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how visitors leaving the facility were observed to verify they are asked to surrender their badge or other identification upon departure or expiration.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.4.4 A visitor log is used to maintain a physical audit trail of visitor activity to the facility as well as for computer rooms and data centers where cardholder data is stored or transmitted. </p> <br />
       
          <p>Document the visitor's name, the firm represented, and the onsite personnel authorizing physical access on the log. </p>
        <br />
      <p> Retain this log for a minimum of three months, unless otherwise restricted by law.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">9.4.4.a Verify that a visitor log is in use to record physical access to the facility as well as computer rooms and data centers where cardholder data is stored or transmitted.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how it was verified that a visitor log is in use to record physical access to:</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>The facility.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Computer rooms and data centers where cardholder data is stored or transmitted.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;"><p>9.4.4.b Verify that the log contains:</p><br />
              <li> The visitor's name,</li> <br />
               <li>The firm represented, and </li><br />
            <li> The onsite personnel authorizing physical access.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Provide the name of the assessor who attests that the visitor log contains:</li><br />
             <li>The visitor's name, </li><br />
             <li>The firm represented, and </li><br />
             <li>The onsite personnel authorizing physical access.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.4.4.c Verify that the log is retained for at least three months.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the defined retention period for visitor logs.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how visitor logs were observed to be retained for at least three months.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.5 Physically secure all media.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.5 Verify that procedures for protecting cardholder data include controls for physically securing all media (including but not limited to computers, removable electronic media, paper receipts, paper reports</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented procedures for protecting cardholder data reviewed to verify controls for physically securing all media are defined.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all types of media used, describe the controls for physically securing the media used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.5.1 Store media backups in a secure location, preferably an off-site facility, such as an alternate or back-up site, or a commercial storage facility. Review the location's security at least annually.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.5.1.a Observe the storage location's physical security to confirm that backup media storage is secure.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify all locations where backup media is stored.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how it was observed that backup media storage is stored in a secure location.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.5.1.b Verify that the storage location security is reviewed at least annually.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that the storage location must be reviewed at least annually. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how processes were observed to verify that reviews of the security of each storage location are performed at least annually.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.6 Maintain strict control over the internal or external distribution of any kind of media, including the following:</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.6 Verify that a policy exists to control distribution of media, and that the policy covers all distributed media including that distributed to individuals.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented policy to control distribution of media that was reviewed to verify the policy covers all distributed media, including that distributed to individuals.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how media distribution is controlled, including distribution to individuals.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.6.1 Classify media so the sensitivity of the data can be determined.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.6.1 Verify that all media is classified so the sensitivity of the data can be determined.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented policy reviewed to verify policy defines how media is classified.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the classifications were observed to be implemented so the sensitivity of the data can be determined.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.6.2 Send the media by secured courier or other delivery method that can be accurately tracked.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
      <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;">9.6.2.a Interview personnel and examine records to verify that all media sent outside the facility is logged and sent via secured courier or other delivery method that can be tracked.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the personnel interviewed who confirm that all media sent outside the facility is logged and sent via secured courier or other delivery method that can be tracked.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the record examined for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how offsite tracking records were examined to verify that all media is logged and sent via secured courier or other delivery method that can be tracked.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.6.2.b Select a recent sample of several days of offsite tracking logs for all media, and verify tracking details are documented.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of recent offsite tracking logs for all media selected.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample, describe how the offsite tracking logs were reviewed to verify that tracking details are documented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.6.3 Ensure management approves any and all media that is moved from a secured area (including when media is distributed to individuals).</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.6.3 Select a recent sample of several days of offsite tracking logs for all media. From examination of the logs and interviews with responsible personnel, verify proper management authorization is obtained whenever media is moved from a secured area (including when media is distributed to individuals).</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that proper management authorization is obtained whenever media is moved from a secured area (including when media is distributed to individuals).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample in 9.6.2.b, describe how offsite tracking logs were examined to verify proper management authorization is obtained whenever media is moved from a secured area (including when media is distributed to individuals).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.7 Maintain strict control over the storage and accessibility of media.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">9.7 Obtain and examine the policy for controlling storage and maintenance of all media and verify that the policy requires periodic media inventories.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented policy for controlling storage and maintenance of all media that was reviewed to verify that the policy defines required periodic media inventories.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.7.1 Properly maintain inventory logs of all media and conduct media inventories at least annually.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
      <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;">9.7.1 Review media inventory logs to verify that logs are maintained and media inventories are performed at least annually.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the media inventories logs reviewed.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how the media inventory logs were reviewed to verify that:</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Media inventory logs of all media were observed to be maintained.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Media inventories are performed at least annually.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.8 Destroy media when it is no longer needed for business or legal reasons as follows:</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;"><p>9.8 Examine the periodic media destruction policy and verify that it covers all media and defines requirements for the following:</p><br />
             <li>Hard-copy materials must be crosscut shredded, incinerated, or pulped such that there is reasonable assurance the hard-copy materials cannot be reconstructed.</li>
             <br />
             <li>Storage containers used for materials that are to be destroyed must be secured.</li>
             <br />
             <li>Cardholder data on electronic media must be rendered unrecoverable via a secure wipe program (in accordance with industry-accepted standards for secure deletion), or by physically destroying the media.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the policy document for periodic media destruction that was examined to verify it covers all media and defines requirements for the following:</li><br />
             <li>Hard-copy materials must be crosscut shredded, incinerated, or pulped such that there is reasonable assurance the hard-copy materials cannot be reconstructed.</li><br />
             <li>Storage containers used for materials that are to be destroyed must be secured.</li><br />
             <li>Cardholder data on electronic media must be rendered unrecoverable via a secure wipe program (in accordance with industry-accepted standards for secure deletion), or by physically destroying the media.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.8.1 Shred, incinerate, or pulp hard-copy materials so that cardholder data cannot be reconstructed. Secure storage containers used for materials that are to be destroyed.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.8.1.a Interview personnel and examine procedures to verify that hard-copy materials are crosscut shredded, incinerated, or pulped such that there is reasonable assurance the hard-copy materials cannot be reconstructed.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify personnel interviewed who confirm that hard-copy materials are crosscut shredded, incinerated, or pulped such that there is reasonable assurance the hard-copy materials cannot be reconstructed.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the procedures were examined to verify that hard-copy materials are crosscut shredded, incinerated, or pulped such that there is reasonable assurance that hardcopy materials cannot be reconstructed.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">9.8.1.b Examine storage containers used for materials that contain information to be destroyed to verify that the containers are secured.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how the storage containers used for materials to be destroyed are secured.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.8.2 Render cardholder data on electronic media unrecoverable so that cardholder data cannot be reconstructed.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.8.2 Verify that cardholder data on electronic media is rendered unrecoverable via a secure wipe program in accordance with industry-accepted standards for secure deletion, or otherwise physically destroying the media.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how cardholder data on electronic media is rendered unrecoverable, via secure wiping of media and/or physical destruction of media.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>If data is rendered unrecoverable via secure deletion or a secure wipe program, identify the industry-accepted standards used.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.9 Protect devices that capture payment card data via direct physical interaction with the card from tampering and substitution.</p>
         <p><em><br />
         Note: These requirements apply to card-reading devices used in card-present transactions (that is, card swipe or dip) at the point of sale. This requirement is not intended to apply to manual key-entry components such as computer keyboards and POS keypads.</em></p>
         <p><em><br />
       Note: Requirement 9.9 is a best practice until June 30, 2015, after which it becomes a requirement.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
    
     <tr>
             <th rowspan="3" align="left" valign="top"  style="background:#ffffff;"><p>9.9 Examine documented policies and procedures to verify they include:</p>
             <li>Maintaining a list of devices.</li> <br />
               <li>Periodically inspecting devices to look for tampering or substitution.</li> <br />
           <li>  Training personnel to be aware of suspicious behavior and to report tampering or substitution of POS devices.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Indicate whether this ROC is being completed prior to June 30, 2015. (yes/no)</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>If "yes" AND the assessed entity does not have this in place ahead of the requirement's effective date, mark 9.9 – 9.9.9.3.b as "Not Applicable."
       If not OR if the assessed entity has this in place ahead of the requirement's effective date, complete the following:</em></th>
    </tr>
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented policies and procedures examined to verify they include:</li><br />
             <li>Maintaining a list of devices. </li><br />
             <li>Periodically inspecting devices to look for tampering or substitution. </li><br />
             </li>
             <li>Training personnel to be aware of suspicious behavior and to report tampering or substitution of POS devices. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.9.1 Maintain an up-to-date list of devices. The list should include the following:</p><br />
       <li> Make, model of device.</li><br />
        <li>Location of device (for example, the address of the site or facility where the device is located).</li><br />
        <li>Device serial number or other method of unique identification.</li> </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;"><p>9.9.1.a Examine the list of devices to verify it includes</p><br />
             <li>Make, model of device. <br />
             </li>
             <br />
               <li>Location of device (for example, the address of the site or facility where the device is located). </li>
               <br />  
               <li>Device serial number or other method of unique identification.</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><p><em>If "yes" at 9.9 AND the assessed entity does not have this in place ahead of the requirement's effective date, mark 9.9.1.a -9.9.1.c as "Not Applicable."
             </em></p>
       <p><em> If not OR if the assessed entity has this in place ahead of the requirement's effective date, complete the following:</em></p></th>
    </tr> <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented up-to-date list of devices examined to verify it includes:</li>
             <li>Make, model of device. </li>
             <li>Location of device (for example, the address of the site or facility where the device is located). </li>
             <li>Device serial number or other method of unique identification.<br />
             </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.9.1.b Select a sample of devices from the list and observe device locations to verify that the list is accurate and up-to-date.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of devices from the list selected for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample, describe how the device locations for the sample of devices was observed to verify that the list is accurate and up-to-date.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">9.9.1.c Interview personnel to verify the list of devices is updated when devices are added, relocated, decommissioned, etc.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify personnel interviewed for this testing procedure.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For the interview, summarize the relevant details discussed that verify the list of devices is updated when devices are added, relocated, decommissioned, etc.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.9.2 Periodically inspect device surfaces to detect tampering (for example, addition of card skimmers to devices), or substitution (for example, by checking the serial number or other device characteristics to verify it has not been swapped with a fraudulent device). </p>
         <p><em><br />
        Note: Examples of signs that a device might have been tampered with or substituted include unexpected attachments or cables plugged into the device, missing or changed security labels, broken or differently colored casing, or changes to the serial number or other external markings.</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;"><p>9.9.2.a Examine documented procedures to verify processes are defined to include the following:</p><br />
             <li>Procedures for inspecting devices.</li><br />
             <li>Frequency of inspections.</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><p><em>If &quot;yes&quot; at 9.9 AND the assessed entity does not have this in place ahead of the requirement's effective date, mark 9.9.2.a -9.9.2.b as &quot;Not Applicable.&quot;</em></p><br />
             <p><em>If not OR if the assessed entity has this in place ahead of the requirement's effective date, complete the following:</em></p></th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented procedures examined to verify that processes are defined to include the following:</li><br />
             <li>Procedures for inspecting devices.</li><br />
             <li>Frequency of inspections.</li>
             </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;"><p>9.9.2.b Interview responsible personnel and observe inspection processes to verify:</p><br />
              <li> Personnel are aware of procedures for inspecting devices.</li> <br />
             <li>All devices are periodically inspected for evidence of tampering and substitution.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify responsible personnel interviewed who confirm that:</li><br />
             <li>Personnel are aware of procedures for inspecting devices. </li><br />
             <li>All devices are periodically inspected for evidence of tampering and substitution</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how inspection processes were observed to verify that:</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All devices are periodically inspected for evidence of tampering.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>All devices are periodically inspected for evidence of substitution.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.9.3 Provide training for personnel to be aware of attempted tampering or replacement of devices. Training should include the following:</p><br />
        <li> Verify the identity of any third-party persons claiming to be repair or maintenance personnel, prior to granting them access to modify or troubleshoot devices.</li><br />
         <li>Do not install, replace, or return devices without verification.</li> <br />
        <li> Be aware of suspicious behavior around devices (for example, attempts by unknown persons to unplug or open devices).</li><br />
      <li> Report suspicious behavior and indications of device tampering or substitution to appropriate personnel (for example, to a manager or security officer).</li></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;"><p>9.9.3.a Review training materials for personnel at point-of-sale locations to verify it includes training in the following:</p>
            <li>Verifying the identity of any third-party persons claiming to be repair or maintenance personnel, prior to granting them access to modify or troubleshoot devices.</li>
            <br />
            <li>Not to install, replace, or return devices without verification. </li><br />
            <li>Being aware of suspicious behavior around devices (for example, attempts by unknown persons to unplug or open devices).</li><br />
            <li>Reporting suspicious behavior and indications of device tampering or substitution to appropriate personnel (for example, to a manager or security officer).</li></th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><p><em>If &quot;yes&quot; at 9.9 AND the assessed entity does not have this in place ahead of the requirement's effective date, mark 9.9.3.a -9.9.3.b as &quot;Not Applicable.&quot;</em></p>
               <em> If not OR if the assessed entity has this in place ahead of the requirement's effective date, complete the following:</em></th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the training materials for personnel at point-of-sale locations that were reviewed to verify the materials include training in the following:</li><br />
             <li>Verifying the identity of any third-party persons claiming to be repair or maintenance personnel, prior to granting them access to modify or troubleshoot devices.</li><br />
             <li>Not to install, replace, or return devices without verification. </li><br />
             <li>Being aware of suspicious behavior around devices (for example, attempts by unknown persons to unplug or open devices).</li><br />
             <li>Reporting all suspicious behavior to appropriate personnel (for example, a manager or security officer).</li><br />
             <li>Reporting tampering or substitution of devices.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th rowspan="6" align="left" valign="top"  style="background:#ffffff;">9.9.3.b Interview a sample of personnel at point-of-sale locations to verify they have received training and are aware of the procedures for the following: 
             <li>Verifying the identity of any third-party persons claiming to be repair or maintenance personnel, prior to granting them access to modify or troubleshoot devices.</li>
             <br />
             <li>Not to install, replace, or return devices without verification. </li>
             <br />
             <li>Being aware of suspicious behavior around devices (for example, attempts by unknown persons to unplug or open devices).</li> <br />
             <li>Reporting suspicious behavior and indications of device tampering or substitution to appropriate personnel (for example, to a manager or security officer).</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of personnel at point-of-sale locations interviewed to verify they have received training.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For the interview, summarize the relevant details discussed that verify interviewees are aware of the procedures for the following:</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Verifying the identity of any third-party persons claiming to be repair or maintenance personnel, prior to granting them access to modify or troubleshoot devices.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Not to install, replace, or return devices without verification. </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Being aware of suspicious behavior around devices (for example, attempts by unknown persons to unplug or open devices).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Reporting suspicious behavior and indications of device tampering or substitution to appropriate personnel (for example, to a manager or security officer).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>9.10 Ensure that security policies and operational procedures for restricting physical access to cardholder data are documented, in use, and known to all affected parties.</p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>    
     <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;"><p>9.10 Examine documentation and interview personnel to verify that security policies and operational procedures for restricting physical access to cardholder data are:</p><br />
             <li>Documented, </li>
             <br />
             <li>In use, and </li>
             <br />
             <li>Known to all affected parties.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify that security policies and operational procedures for restricting physical access to cardholder data are documented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>Identify responsible personnel interviewed who confirm that the above documented security policies and operational procedures for restricting physical access to cardholder data are:</em></th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>In use</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Known to all affected parties</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
  </thead>
</table>   
<h2>Regularly Monitor and Test Networks </h2>    
<h3><em>Requirement 10:	Track and monitor all access to network resources and cardholder data</em></h3>     
<table width="100%">
<thead>
 <tr>
 <th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
             and Testing Procedures</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
             <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
             Assessor's Response</th>
             <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
             (check one)</th>
    </tr>
           <tr>
             <th valign="middle"  style="background:#c5e3c0;">In Place</th>
             <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
             <th valign="middle"  style="background:#c5e3c0;">N/A</th>
             <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
             <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
          </tr>
          
            <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.1 Implement audit trails to link all access to system components to each individual user.</p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
    <tr>
             <th rowspan="4" align="left" valign="top"  style="background:#ffffff;"><p>10.1 Verify, through observation and interviewing the system administrator, that:</p><br />
             <li>Audit trails are enabled and active for system components.</li>
             <br />
             <li>Audit trails are enabled and active for system components.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the system administrator(s) interviewed who confirm that:</li><br />
             <li>Audit trails are enabled and active for system components.</li><br />
             <li>Access to system components is linked to individual users.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how audit trails were observed to verify the following:</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Audit trails are enabled and active for system components.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Access to system components is linked to individual users.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.2 Implement automated audit trails for all system components to reconstruct the following events:</p>                          
             </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.2 Through interviews of responsible personnel, observation of audit logs, and examination of audit log settings, perform the following:</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm the following from 10.2.1-10.2.7 are logged:</li><br />
             <li>All individual access to cardholder data.<br />
             </li>
             <br />
             <li>All actions taken by any individual with root or administrative privileges.<br />
             </li>
             <br />
             <li>Access to all audit trails.</li>
             <br />
             <li>All actions taken by any individual with root or administrative privileges.<br />
             </li>
             <br />
             <li>Use of identification and authentication mechanisms. <br />
             </li>
             <br />
             <li>All elevation of privileges.<br />
             </li>
             <br />
             <li>All changes, additions, or deletions to any account with root or administrative privileges.</li>
             <br />
             <li>Initialization of audit logs.<br />
             </li>
             <br />
             <li>Stopping or pausing of audit logs.<br />
             </li>
             <br />
             <li>Creation and deletion of system level objects.</li>
             </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of audit logs observed to verify the following from 10.2.1-10.2.7 are logged:</li><br />
             <li>All individual access to cardholder data.</li>
             <br />
             <li>All actions taken by any individual with root or administrative privileges.</li>
             <br />
             <li>Access to all audit trails.</li>
             <br />
             <li>All actions taken by any individual with root or administrative privileges.</li>
             <br />
             <li>Use of identification and authentication mechanisms. </li>
             <br />
             <li>All elevation of privileges.</li>
             <br />
             <li>All changes, additions, or deletions to any account with root or administrative privileges.</li>
             <br />
             <li>Initialization of audit logs.<br />
             </li>
             <br />
             <li>Stopping or pausing of audit logs.<br />
             </li>
             <br />
             <li>Creation and deletion of system level objects.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.2.1 All individual user accesses to cardholder data.</p>                          
 </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.2.1 Verify all individual access to cardholder data is logged.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify all individual access to cardholder data is logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
       <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.2.2 All actions taken by any individual with root or administrative privileges.</p>                          
 </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.2.2 Verify all actions taken by any individual with root or administrative privileges are logged.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify all actions taken by any individual with root or administrative privileges are logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.2.3 Access to all audit trails.</p>                          
 </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.2.3 Verify access to all audit trails is logged.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify access to all audit trails is logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.2.4 Invalid logical access attempts.</p>                          
 </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.2.4 Verify invalid logical access attempts are logged</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify invalid logical access attempts are logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.2 5 Use of and changes to identification and authentication mechanisms—including but not limited to creation of new accounts and elevation of privileges—and all changes, additions, or deletions to accounts with root or administrative privileges.</p>                          
 </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.2.5.a Verify use of identification and authentication mechanisms is logged.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify use of identification and authentication mechanisms is logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.2.5.b Verify all elevation of privileges is logged.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify all elevation of privileges is logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.2.5.c Verify all changes, additions, or deletions to any account with root or administrative privileges are logged.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify all changes, additions, or deletions to any account with root or administrative privileges are logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.2.6 Initialization, stopping, or pausing of the audit logs.</p>                          
 </th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;"><p>10.2.6 Verify the following are logged:</p>
             <li>Initialization of audit logs.</li>
             <br />
             <li>Stopping or pausing of audit logs.</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify initialization of audit logs is logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify stopping and pausing of audit logs is logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.2.7 Creation and deletion of system-level objects.</p>                          
</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.2.7 Verify creation and deletion of system level objects are logged.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample at 10.2, describe how configuration settings were observed to verify creation and deletion of system level objects are logged.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
    <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.3 Record at least the following audit trail entries for all system components for each event:</p>                          
</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
    <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.3 Through interviews and observation of audit logs, for each auditable event (from 10.2), perform the following:</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the responsible personnel interviewed who confirm that for each auditable event from 10.2.1-10.2.7, the following are included in log entries:</li><br />
             <li>User identification</li><br />
             <li>Type of event</li><br />
             <li>Date and time</li><br />
             <li>Success or failure indication</li><br />
             <li>Origination of event</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of audit logs from 10.2.1-10.2.7 observed to verify the following are included in log entries:</li><br />
       <li>User identification</li><br />
       <li>Type of event</li><br />
       <li>Date and time</li><br />
       <li>Success or failure indication</li><br />
       <li>Origination of event</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.3.1 User identification</p>                          
</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
    <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.3.1 Verify user identification is included in log entries.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all logs in the sample at 10.3, describe how the audit logs were observed to verify user identification is included in log entries.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
      <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.3.2 Type of event</p>                          
</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.3.2 Verify type of event is included in log entries.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all logs in the sample at 10.3, describe how the audit logs were observed to verify type of event is included in log entries.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
      <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.3.3 Date and time</p>                          
</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
    <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.3.3 Verify date and time stamp is included in log entries.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all logs in the sample at 10.3, describe how the audit logs were observed to verify date and time stamp is included in log entries.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
       <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.3.4 Success or failure indication</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.3.4 Verify success or failure indication is included in log entries.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all logs in the sample at 10.3, describe how the audit logs were observed to verify success or failure indication is included in log entries.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.3.5 Origination of event</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
    <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.3.5 Verify origination of event is included in log entries.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all logs in the sample at 10.3, describe how the audit logs were observed to verify origination of event is included in log entries.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
    <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.3.6 Identity or name of affected data, system component, or resource</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.3.6 Verify identity or name of affected data, system component, or resources is included in log entries.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all logs in the sample at 10.3, describe how the audit logs were observed to verify the identity or name of affected data, system component, or resource is included in log entries.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
    <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.4 Using time-synchronization technology, synchronize all critical system clocks and times and ensure that the following is implemented for acquiring, distributing, and storing time. </p>
      <p><em>Note: One example of time synchronization technology is Network Time Protocol (NTP).</em></p></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
    <tr>
             <th rowspan="5" align="left" valign="top"  style="background:#ffffff;">10.4 Examine configuration standards and processes to verify that time-synchronization technology is implemented and kept current per PCI DSS Requirements 6.1 and 6.2.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the time synchronization technologies in use. (If NTP, include version)</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented time-synchronization process that defines processes for ensuring the time synchronization technologies are kept current per PCI DSS Requirements 6.1 and 6.2.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how processes were examined to verify that time synchronization technologies are:</th>
    </tr>
     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Implemented.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Kept current, per the documented process.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
    <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"> 10.4.1 Critical systems have the correct and consistent time.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
     <tr>
             <th align="left" valign="top"  style="background:#ffffff;"><p>10.4.1.a Examine the process for acquiring, distributing and storing the correct time within the organization to verify that:</p><br />
               <li>Only the designated central time server(s) receive time signals from external sources, and time signals from external sources are based on International Atomic Time or UTC.</li>
               <br />
                 <li>Where there is more than one designated time server, the time servers peer with one another to keep accurate time.</li>
                 <br />
             <li>Systems receive time information only from designated central time server(s).</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented process for acquiring, distributing, and storing the correct time within the organization examined to verify that the process defines the following:</li><br />
             <li>Only the designated central time server(s) receive time signals from external sources, and time signals from external sources are based on International Atomic Time or UTC.</li>
             <br />
               <li>Where there is more than one designated time server, the time servers peer with one another to keep accurate time.</li>
               <br />
             <li>Systems receive time information only from designated central time server(s).</li>             <br /></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
             <th rowspan="5" align="left" valign="top"  style="background:#ffffff;"><p>10.4.1.b Observe the time-related system-parameter settings for a sample of system components to verify:</p><br />
             <li>Only the designated central time server(s) receive time signals from external sources, and time signals from external sources are based on International Atomic Time or UTC.</li>
             <br />
              <li>Where there is more than one designated time server, the designated central time server(s) peer with one another to keep accurate time. </li>
              <br />
             <li>Systems receive time only from designated central time server(s).</li></th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for 10.4.1.b-10.4.2.b</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
       <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>For all items in the sample, describe how the time-related system-parameter settings for the sample of system components were observed to verify:</em></th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Only the designated central time server(s) receive time signals from external sources, and time signals from external sources are based on International Atomic Time or UTC.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Where there is more than one designated time server, the designated central time server(s) peer with one another to keep accurate time.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Systems receive time only from designated central time server(s).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.4.2 Time data is protected.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
       <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.4.2.a Examine system configurations and time-synchronization settings to verify that access to time data is restricted to only personnel with a business need to access time data.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented time-synchronization procedures examined to verify procedures define that:</li><br />
             <li>Access to time data is restricted to only personnel with a business need to access time data.</li><br />
             <li>Define which personnel have a business need to access time data.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the authorized personnel interviewed who confirm that personnel with access to time data have a business need to access time data.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample from 10.4.1, describe how configuration settings were examined to restrict access to time data to only personnel with a documented need.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
       <th rowspan="7" align="left" valign="top"  style="background:#ffffff;">10.4.2.b Examine system configurations, time synchronization settings and logs, and processes to verify that any changes to time settings on critical systems are logged, monitored, and reviewed.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented time-synchronization procedures examined to verify procedures define that changes to time settings on critical systems must be:</li><br />
               <li>Logged</li><br />
               <li>Monitored</li><br />
               <li>Reviewed<br />
             </li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample from 10.4.1, describe how configuration settings on the sampled system components were examined to log any changes to time settings on critical systems.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For all items in the sample from 10.4.1, describe how logs were examined to log any changes to time settings on critical systems.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Describe how time synchronization processes were examined to verify changes to time settings on critical systems are:</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Logged</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Monitored</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Reviewed</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.4.3 Time settings are received from industry-accepted time sources.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
    <tr>
       <th rowspan="6" align="left" valign="top"  style="background:#ffffff;">10.4.3 Examine systems configurations to verify that the time server(s) accept time updates from specific, industry-accepted external sources (to prevent a malicious individual from changing the clock). Optionally, those updates can be encrypted with a symmetric key, and access control lists can be created that specify the IP addresses of client machines that will be provided with the time updates (to prevent unauthorized use of internal time servers).</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the document reviewed to verify it defines that:</li><br />
             <li>Time settings are configured to either accept time updates from specific, industry-accepted time sources; OR </li><br />
             <li>The updates are encrypted with a symmetric key and access control lists specify the IP addresses of client machines that will be provided with the time updates.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of time servers selected.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">For all items in the sample, describe how configuration settings were examined to verify either of the following:</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>That the time servers receive time updates from specific, industry-accepted external sources. OR</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>That time updates are encrypted with a symmetric key, and access control lists specify the IP addresses of client machines.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the industry-accepted time source indicated (if applicable).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.5 Secure audit trails so they cannot be altered.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
       <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">10.5 Interview system administrators and examine system configurations and permissions to verify that audit trails are secured so that they cannot be altered as follows:</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the system administrators interviewed who confirm that audit trails are secured so that they cannot be altered as follows (from 10.5.1-10.5.5):</li><br />
             <li>Only individuals who have a job-related need can view audit trail files.</li><br />
             <li>Current audit trail files are protected from unauthorized modifications via access control mechanisms, physical segregation, and/or network segregation.</li><br />
             <li>Current audit trail files are promptly backed up to a centralized log server or media that is difficult to alter, including:</li><br />
             <li>That current audit trail files are promptly backed up to the centralized log server or media</li><br />
             <li>The frequency that audit trail files are backed up</li><br />
             <li>That the centralized log server or media is difficult to alter</li><br />
             <li>Logs for external-facing technologies (for example, wireless, firewalls, DNS, mail) are written onto a secure, centralized, internal log server or media.</li><br />
             <li>Use file-integrity monitoring or change-detection software on logs to ensure that existing log data cannot be changed without generating alerts.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
    <tr>
       <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the sample of system components selected for this testing procedure from 10.5.1-10.5.5.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.5.1 Limit viewing of audit trails to those with a job-related need.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
       <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.5.1 Only individuals who have a job-related need can view audit trail files.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample at 10.5, describe how system configurations and permissions were examined to verify they restrict viewing of audit trail files to only individuals who have a documented job-related need.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.5.2 Protect audit trail files from unauthorized modifications.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr> 
       <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.5.2 Current audit trail files are protected from unauthorized modifications via access control mechanisms, physical segregation, and/or network segregation.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample at 10.5, describe how system configurations and permissions were examined to verify that current audit trail files are protected from unauthorized modifications. (e.g., via access control mechanisms, physical segregation, and/or network segregation).</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.5.3 Promptly back up audit trail files to a centralized log server or media that is difficult to alter.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
       <tr>
             <th rowspan="5" align="left" valign="top"  style="background:#ffffff;">10.5.3 Current audit trail files are promptly backed up to a centralized log server or media that is difficult to alter.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample at 10.5, describe how system configurations and permissions were examined to verify that current audit trail files are promptly backed up to a centralized log server or media that is difficult to alter.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;">Identify and briefly describe the following:</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>The centralized log server or media to which audit trail files are backed up.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>How frequently the audit trail files are backed up, and how the frequency is appropriate.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
        <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>How the centralized log server or media is difficult to alter.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.5.4 Write logs for external-facing technologies onto a secure, centralized, internal log server or media device.</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
       <tr>
             <th rowspan="2" align="left" valign="top"  style="background:#ffffff;">10.5.4 Logs for external-facing technologies (for example, wireless, firewalls, DNS, mail) are written onto a secure, centralized, internal log server or media.</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>For each item in the sample at 10.5, describe how system configurations and permissions were examined to verify that logs for external-facing technologies are written onto a secure, centralized, internal log server or media.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
        <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe how logs for external-facing technologies are written onto a secure centralized internal log server or media.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;">10.5.5 Use file-integrity monitoring or change-detection software on logs to ensure that existing log data cannot be changed without generating alerts (although new data being added should not cause an alert).</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
       <tr>
             <th rowspan="5" align="left" valign="top"  style="background:#ffffff;">10.5.5 Examine system settings, monitored files, and results from monitoring activities to verify the use of file-integrity monitoring or change-detection software on logs.</th>
             <th height="26" colspan="7" align="left" valign="top"  style="background:#ffffff;"><em>For each item in the sample at 10.5, describe how the following were examined to verify the use of file-integrity monitoring or change-detection software on logs:</em></th>
    </tr>     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>System settings</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Monitored files</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>     <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Results from monitoring activities</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the file-integrity monitoring (FIM) or change-detection software verified to be in use.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>
     <tr>
             <th colspan="8" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.6 Review logs and security events for all system components to identify anomalies or suspicious activity.</p>
               <p><em>Note: Log harvesting, parsing, and alerting tools may be used to meet this Requirement.</em><br />
             </p></th>            
    </tr>  
     <tr>
             <th colspan="8" align="left" valign="middle"  style="background:#e8f3dc;">10.6 Perform the following:</th>              
    </tr>  
     <tr>
             <th colspan="3" align="left" valign="middle"  style="background:#e8f3dc;"><p>10.6.1 Review the following at least daily:</p><br />
             <li>All security events.</li>
             <br />
             <li>Logs of all system components that store, process, or transmit CHD and/or SAD, or that could impact the security of CHD and/or SAD.</li>
             <br />
             <li>Logs of all critical system components.<br />
             </li>
             <br />
             <li>Logs of all servers and system components that perform security functions (for example, firewalls, intrusion-detection systems/intrusion-prevention systems (IDS/IPS), authentication servers, e-commerce redirection servers, etc.).</li></th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
             <th align="left" valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
    </tr>  
       
      <tr>
             <th align="left" valign="top"  style="background:#ffffff;">10.6.1.a Examine security policies and procedures to verify that procedures are defined for, reviewing the following at least daily, either manually or via log tools:</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Identify the documented security policies and procedures examined to verify that procedures define reviewing the following at least daily, either manually or via log tools:</li>
             <li>All security events. </li>
             <li>Logs of all system components that store, process, or transmit CHD and/or SAD, or that could impact the security of CHD and/or SAD. </li>
             <li>Logs of all critical system components.</li>
             <li>Logs of all servers and system components that perform security functions.</li>
            
             </th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li>Describe the manual or log tools used for daily review of logs.</li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>     <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
        <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
        <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
        <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr> 
       <tr>
             <th align="left" valign="top"  style="background:#ffffff;">&nbsp;</th>
             <th height="26" align="left" valign="top"  style="background:#ffffff;"><li></li></th>
             <th align="left" valign="top" colspan="6" style="background:#ffffff;">&nbsp;</th>
    </tr>  
    </thead>
    </table>  
</body>
</html>
