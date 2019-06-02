---
category_name: medium
problem_code: TASTRMAT
problem_name: 'String Matching'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: tuananh93
problem_tester: stzgd
date_added: 6-12-2014
tags:
    - fft
    - hard
    - ltime19
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TASTRMAT'
time:
    view_start_date: 1419755400
    submit_start_date: 1419755400
    visible_start_date: 1419755400
    end_date: 1735669800
    current: 1493557944
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME19/mandarin/TASTRMAT.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME19/russian/TASTRMAT.pdf).

In this problem we will have a few definitions as described below:

- **Binary string**: A string containing only characters '0' and '1'.
- **Hamming distance** of the two binary string of the same length is the number of the positions where the two strings have
   different characters. eg. the hamming distance of "0**10**10101" and
   "0**01**101**1**1" is 3, the hamming distance of a binary string with itself is 0.
- **Sub-string** of a string is a segment of contiguous characters of that string.

You would be given two binary strings **A** and **B** with the length of **N** and **M** respectively.
You need to calculate the Hamming distance between **B** and every sub-strings of length **M** of **A**.

For this problem, you will be given a fixed string **A**. There will be **K** queries each containing a string representing **B**.

### Input

- The first line contains the binary string **A**.
- The next line contains an integer **K**.
- Each of the next **K** lines contains a binary string **B**.

### Output

To avoid generating large output, for each query string **B** instead of printing **N - M + 1** values of Hamming distance between
sub-strings of **A** and **B** in the order of the position of the sub-string in **A**, you only need to print
the **hash value** of this sequence as described below.

Let s\[0..**L** -1\] be a sequence of **L** integers. The recursive function f(s) will return the hash value of s.

- if **L** = 1, f(s) = s\[0\] mod **1000000007**
- Otherwise, f(s) = (f(s\[0..**L**-2\]) \* **100001** + s\[**L**-1\]) mod **1000000007**

So overall, your output should be **K** lines, each containing the hash value corresponding to the query string **B**.

### Constraints

**20 points:**

- **1** ≤ **M ≤ N** ≤ **1000**
- **1** ≤ **K** ≤ **5**

**40 points:**

- **1** ≤ **M ≤ N** ≤ **50000**
- **1** ≤ **K** ≤ **5**

**40 points:**

- **1** ≤ **M ≤ N** ≤ **100000**
- **1** ≤ **K** ≤ **5**

### Example

<pre><b>Input:</b>
10101
3
101
00
0101

<b>Output:</b>
300003
993599731
400004
</pre>
### Explanation:

**First test case:**  **A** = "10101", **B** = "101".
The Hamming distances sequence will be (0, 3, 0) and the hash value of this sequence is 300003.

**Second test case:**  **A** = "10101", **B** = "00". The Hamming distances sequence will be (1, 1, 1, 1)
and the hash of this sequence is 993599731.

**Third test case:** **A** = "10101", **B** = "0101". The Hamming distances sequence will be (4, 0)
and the hash value of this sequence is ((4 mod 1000000007) \* 100001 + 0) mod 1000000007 = 400004.
