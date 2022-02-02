---
{"languages_supported":{"0":"NA"},"title":"BAKE","category":"NA","old_version":true,"problem_code":"BAKE","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>The chef has turned into an entrepreneur running a bakery business. He is selling products like Biscuit, Bread etc which are packaged in various sizes. He is selling the products in the various cities of different provinces which are further sub-categorized into various regions. He maintains the data about the sex and age of all his customers along with the time of purchase. For running his business successfully, he requires a business intelligence tool to get analysis reports of sales aggregates based on various parameters so that he can run his business efficiently.</p>
<h3>Input</h3>
<p>There are 10 different products which will be packaged in maximum 3 different sizes. There are 10 different provinces and each province can have upto 20 cities which can be further divided in at maximum 5 different regions.<br /><br /> The first line of the input contains the total number S (&lt;= 100000) of input lines. Each input line either begins with character 'I' (which stands for sale input)or 'Q' (which stands for query). The format of sale input is <br /><br /> <b>I product_id[.size_id] province[.city_id[.region_id]] M/F age units_sold</b><br /><br /> This line contains details of individual sale vis-vis product details, location detail, customer sex and age (from 1 to 90, including the limit) separated by spaces in the following format. The product details e.g 6.2 which means the product with code 6 and size id 2. Next will be location like 8.18.4 which means the 8th province, in the 4th region of the city with code 18. Then the sex of the customer either 'M' or 'F' and age from 1 to 90, including the limits. Note that all the codes/id's will begin from 0. Note that parts in the square brackets in the given format are optional because some specific information about the sale is missing due to practical reasons. The units_sold will be less than or equal to 100. <br /><br /> Similarly, the format for a query line is <br /><br /> <b>Q product_id[.size_id] province[.city_id[.region_id]] M/F start_age[-end_age]</b><br /><br /> This queries the total number of product units sold which falls under that specification. In case the optional parts are missing, then it means that the query is asking for the total units sold falling under all the sub-specifications under that. For the age parameter, if the end_age is missing then the query is only for the unit sold to customer of age equal to start_age, otherwise for all the customers falling in the range. A special product_id is -1 which means all the products and similarly -1 for province means all the provinces. This id will never be qualified with sub-specifications.</p>
<h3>Output</h3>
<p>For each query line specification output the total units sold which falls under that on a separate line. The answer should be based on the input given before the line and not on the input which will appear in the subsequent lines.</p>
<h3>Example</h3>
<pre><b>Input:</b>
6
I 1.1 2.1 F 70 22
I 1 4.1 F 37 73
Q 1.1 2 F 10-90
I 2 4.2 M 63 24
Q 1 -1 F 30-70
Q 2 4.1 F 37

<b>Output:</b>
22
95
0

</pre>
<p><b>Sample I/O Explanation</b><br /><br /> For the first query at the 4th line of input, only the first input is relevant as the the second input has location specification as 4.1 whereas in the query it is 2. Location specification 2 includes all the cities in the province 2 such as 2.1 whic is the case with the first input. Hence the solution is 22. <br /><br /> For the query specification on the second last line, it only includes the first 2 inputs as the third input mismatches with the query w.r.t the location and sex specification.<br /><br /> For the third query, it does not match with any input, hence the answer is 0.<br /><br /></p>
<p></p>    