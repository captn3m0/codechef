---
languages_supported:
    - NA
title: HOLES
category: NA
old_version: true
problem_code: HOLES
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef wrote some text on a piece of paper and now he wants to know how many holes are in the text. What is a hole? If you think of the paper as the plane and a letter as a curve on the plane, then each letter divides the plane into regions. For example letters "A", "D", "O", "P", "R" divide the plane into two regions so we say these letters each have one hole. Similarly, letter "B" has two holes and letters such as "C", "E", "F", "K" have no holes. We say that the number of holes in the text is equal to the total number of holes in the letters of the text. Help Chef to determine how many holes are in the text.

### Input

 The first line contains a single integer **T &lt;= 40**, the number of test cases. **T** test cases follow. The only line of each test case contains a non-empty text composed only of uppercase letters of English alphabet. The length of the text is less then 100. There are no any spaces in the input.

### Output

 For each test case, output a single line containing the number of holes in the corresponding text.

### Example

<pre>
<b>Input:</b>
2
CODECHEF
DRINKEATCODE

<b>Output:</b>
2
5
</pre>