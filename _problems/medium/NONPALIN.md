---
languages_supported:
    - NA
title: NONPALIN
category: NA
old_version: true
problem_code: NONPALIN
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

For the given string **S** of length **N** you need to find for each **L** from **1** to **N** the first non-palindrome substring of **S** that has length **L**. That is, for each **L** from **1** to **N** you need to find the smallest positive integer **K <= N - L + 1** such that the string **S\[K, K + L - 1\]** is not a palindrome. Denote this number by **K(L)**. Here **S\[i, j\]** stands for the substring of **S** composed of its characters in positions **i, i + 1, ..., j**. Characters of **S** are numbered from **1** to **N**. If for some **L** there is no such **K** set **K(L) = 0**. After you find all numbers **K(1), K(2), ..., K(N)** output the following sum

 **100007N - 1 \* K(1) + 100007N - 2 \* K(2) + ... + 100007 \* K(N - 1) + K(N)**  
 modulo **264**. 

 **Remark.** The string is called a palindrome if it coincides with its reverse. So **abacaba** and **abba** are palindromes but **codechef** and **abbc** are not. ### Input

The first line contains a single integer **T**, the number of test cases. **T** test cases follow. The only line of each test case contains a non-empty string composed only of lowercase letters of the English alphabet.

### Output

For each test case, output a single line containing the corresponding sum constructed by numbers **K(1), K(2), ..., K(N)** as mentioned in the problem statement modulo **264**.

### Constraints

 **1 <= T <= 20 
 1 <= length of S <= 100000**

### Example

<pre><b>Input:</b>
4
abacaba
abba
codechef
aaaa

<b>Output:</b>
12789123637940213592
10001500056
18134494634143926857
0
</pre>### Explanation

Actual values of **K(1), K(2), ..., K(N)** in the tests are: 
abacaba: {0, 1, 2, 1, 1, 1, 0} 
abba: {0, 1, 1, 0} 
codechef: {0, 1, 1, 1, 1, 1, 1, 1}



aaaa: {0, 0, 0, 0}
