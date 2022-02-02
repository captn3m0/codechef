---
languages_supported:
    - NA
title: INSOMB3
category: NA
old_version: true
problem_code: INSOMB3
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given a matrix of dimensions RxC composed of only two types of characters: 


'*' and '#' 


 find the number of I characters present in the matrix. The
criteria for identifying an I is as follows:


- All the characters forming the I are # only.
- The figure is completely filled with #s.
- The thickness and width of the top and bottom rectangles is identical.
- The central column is formed by leaving out floor(width/3) positions on both
    sides.
- The central column may be of any length &gt;= 1
- The I must be surrounded by "\*" or the border (i.e. no additional attachments to the I)

Note: A given input figure is likely to contain multiple I's.




**Input Format:**


Line 1: R C - Two space separated natural numbers denoting the dimensions of
the rows and columns in the matrix respectively. Both R and C will be less than or equal to 40.


Line 2 to R+1: Lines containing C space separated symbols. The symbols are
chosen from the set {\*, #}




**Output Format:**


Line 1: The number of I's in the given figure.




**Sample Input:**

<pre>
10 10
# # # # # # # # # #
# # # # # # # # # #
* * * # # # # * * *
* * * # # # # * * *
* * * # # # # * * *
* * * # * # # # * *
* * * # # # # * * *
* * * # # # # * * *
# # # # # # # # # #
# # # # # # # # # #
</pre>


**Sample Output:**

<pre>
0
</pre>


Explanation: The given I is invalid because of 2 reasons:


It is not completely filled


It has an extra attachment of a # on the right side of the central column.
