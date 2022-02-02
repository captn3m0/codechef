---
languages_supported:
    - NA
title: MONTRANS
category: NA
old_version: true
problem_code: MONTRANS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

You are standing near a very strange machine. If you put **C** cents in the machine, the remaining money in your purse will transform in an unusual way. If you have **A** dollars and **B** cents remaining in your purse after depositing the **C** cents, then after the transformation you will have **B** dollars and **A** cents. You can repeat this procedure as many times as you want unless you don't have enough money for the machine. If at any point **C &gt; B** and **A &gt; 0**, then the machine will allow you to break one of the A dollars into **100** cents so you can place **C** cents in the machine. The machine will not allow you to exchange a dollar for **100** cents if **B &gt;= C**.

Of course, you want to do this to maximize your profit. For example if **C=69** and you have **9** dollars and **77** cents then after you put **69** cents in the machine you will have **8** dollars and **9** cents (**9.77 --&gt; 9.08 --&gt; 8.09**). But I should warn you that you can't cheat. If you try to throw away **9** cents before the transformation (in order to obtain **99** dollars and **8** cents after), the machine will sense you are cheating and take away all of your money. You need to know how many times you should do this transformation in order to make a maximum profit. Since you are very busy man, you want to obtain the maximum possible profit in the minimum amount of time.

### Input

 The first line contains a single integer **T &lt;= 40**, the number of test cases. **T** test cases follow. The only line of each test case contains three nonnegative integers **A**, **B** and **C** where **A, B, C &lt; 100**. It means that you have **A** dollars and **B** cents in your purse and you need to put **C** cents in the machine to make the transformation.

### Output

 For each test case, output a single line containing the minimal number of times you should do this transformation in order to make a maximal profit. It is guaranteed that the answer is less than **10000**.

### Example

<pre>
<b>Input:</b>
2
9 77 69
98 99 69

<b>Output:</b>
4
0
</pre>
### Explanation

In the first test we have the following sequence: **9.77, 8.09, 40.07, 38.39, 70.37, 68.69, 0.68**. After last step we have not enough money for further transformations. The maximal profit will be after **4** transformations.
