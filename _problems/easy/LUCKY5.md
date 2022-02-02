---
languages_supported:
    - NA
title: LUCKY5
category: NA
old_version: true
problem_code: LUCKY5
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits **4** and **7**. For example, numbers **47**, **744**, **4** are lucky and **5**, **17**, **467** are not.

 Chef has a positive integer **N**. He can apply any of the following operations as many times as he want in any order:

- Add **1** to the number **N**.
- Take some digit of **N** and replace it by any non-zero digit.
- Add any non-zero leading digit to **N**.

 Find the minimum number of operations that is needed for changing **N** to the lucky number.

### Input

The first line contains a single positive integer **T**, the number of test cases. **T** test cases follow. The only line of each test case contains a positive integer **N** without leading zeros.

### Output

For each **T** test cases print one integer, the minimum number of operations that is needed for changing **N** to the lucky number.

### Constraints

1 ≤ **T** ≤ 10

1 ≤ **N** &lt; 10100000

### Example

<pre>
<b>Input:</b>
3
25
46
99

<b>Output:</b>
2
1
2

</pre>