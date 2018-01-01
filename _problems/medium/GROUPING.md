---
languages_supported:
    - NA
title: GROUPING
category: NA
old_version: true
problem_code: GROUPING
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 The Chef's last idea was that some cooks might work better in pairs. But now he thinks that it is better to form one group of Chefs in order to make larger increase of foods quality. All pairs of employees in this group must be compatible. We call such group friendly. Chef provides you the list of compatible pairs of employees. Also for each employee, the Chef has assigned a number estimating how well the overall quality of the food might increase if this employee will be in the group. Strangely enough, the Chef estimates that picking the **i**'th employee in the group will increase the quality of food prepared in his kitchen by exactly **2ci** where  **ci** are nonnegative integer. Also note that Chef has assigned different numbers for his employees. Chef doesn't want to form just one friendly group of employees that make the largest increase of food quality. He wants to have several possibilities of such groups. Namely he wants to know **K** best friendly groups by the value of increase of food quality. Note that Chef considers only non-empty groups. Help him to find these groups.

### Input

 The first line contains a single integer **T** denoting the number of test cases (at most **20**). Each test case begins with three integers **N**, **M** and **K**. Here, **N** is the number of employees (between **1** and **10000**), **M** is the number of compatible pairs of employees (between  and **20000**) and **K** is the number of friendly groups that you need to find (between **1** and **50**). The employees are numbered from  to **N-1**. The next line contains **N** integers  **c0, c1, ..., cN-1**  described in the problem statement. These numbers are different non-negative integers not greater than **109**. The next **M** lines describe pairs of compatible employees, one per line. The **i**'th such line contains two distinct integers **ui, vi** between  and **N-1**.

 No pair of employees will be given more than once in the input. That is, for distinct indices **i** and **j**, we do not have both **ui = uj** and **vi = vj**, nor do we have both **ui = vj** and **vi = uj**.

### Output

 The output for each test case consists of **K+1** lines. Each of the first **K** lines consists of the employees indices that are used in **i**'th maximum total value grouping where **i** is the number of line. These indices should be given in increasing order with a single space between consecutive numbers. Last line of the output of each test case must be blank. It is guaranteed that there exist at least **K** different friendly groups. If there is more than one possible output, then any will do.

### Example

<pre>
<b>Input:</b>
2
4 5 11
4 2 3 1
0 1
0 2
1 2
2 3
3 1
1 0 1
1000000000

<b>Output:</b>
0 1 2
0 2
0 1
0
1 2 3
1 2
2 3
2
1 3
1
3

0


</pre>