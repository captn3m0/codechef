---
languages_supported:
    - NA
title: VOTERS
category: NA
old_version: true
problem_code: VOTERS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 As you might remember, the collector of Siruseri had ordered a complete revision of the Voters List. He knew that constructing the list of voters is a difficult task, prone to errors. Some voters may have been away on vacation, others may have moved during the enrollment and so on.

 To be as accurate as possible, he entrusted the task to three different officials. Each of them was to independently record the list of voters and send it to the collector. In Siruseri, every one has a ID number and the list would only list the ID numbers of the voters and not their names. The officials were expected to arrange the ID numbers in ascending order in their lists.

 On receiving the lists, the Collector realised that there were discrepancies - the three lists were not identical. He decided to go with the majority. That is, he decided to construct the final list including only those ID numbers that appeared in at least 2 out of the 3 lists. For example if the three lists were

<pre>
23  30  42  57  90
21  23  35  57  90  92
21  23  30  57  90 
</pre>then the final list compiled by the collector would be:

<pre>
21  23  30  57  90
</pre> The ID numbers 35, 42 and 92 which appeared in only one list each do not figure in the final list.

 Your task is to help the collector by writing a program that produces the final list from the three given lists.

Input format

The first line of the input contains 3 integers _N_1, _N_2 and _N_3. _N_1 is the number of voters in the first list, _N_2 is the number of voters in the second list and _N_3 is the number of voters in the third list. The next _N_1 lines (lines 2,...,_N_1+1) contain one positive integer each and describe the first list in ascending order. The following _N_2 lines (lines _N_1+2,...,_N_1+_N_2+1) describe the second list in ascending order and the final _N_3 lines (lines _N_1+_N_2+2,...,_N_1+_N_2+_N_3+1) describe the third list in ascending order.

Output format

The first line of the output should contain a single integer _M_ indicating the number voters in the final list. The next _M_ lines (lines 2,...,_M_+1) should contain one positive integer each, describing the list of voters in the final list, in ascending order.

Test data

You may assume that 1 _N_1,_N_2,_N_3 50000.

Example

Sample input:

<pre>
5 6 5
23
30
42
57
90
21 
23 
35 
57 
90 
92 
21 
23 
30 
57 
90 
</pre>Sample output:

<pre>
5
21 
23 
30 
57 
90
</pre>