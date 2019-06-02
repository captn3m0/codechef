---
category_name: medium
problem_code: TANGLED
problem_name: 'Entangled Strings'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: utkarsh_lath
problem_tester: Rubanenko‎
date_added: 25-07-2013
tags:
    - hard
    - lcp
    - ltime02
    - suffix
    - utkarsh_lath
editorial_url: 'http://discuss.codechef.com/problems/TANGLED'
time:
    view_start_date: 1375002000
    submit_start_date: 1375002000
    visible_start_date: 1375002000
    end_date: 1735669800
    current: 1493557942
layout: problem
---
All submissions for this problem are available.Chef is now off his restaurant hard-work, but that doesn't mean he is allowed to rest... After all, he will be hosting a dinner to his cousins who came visit him all the way from Gigaland (as we know, Chef lives in Byteland).

Once they arrived, Chef got a bit worried as he saw that they were bringing along their loud children with them... Besides all the noise, he would even have to cook extra food, so he decided to keep children busy and gave them two strings **S1** and **S2**. He also has an integer **L**, which he gave to the children as well.

For a string **S=c1 c2 ... cN**, let **S\[a,b\]** denote **ca ca+1 ... cb-1 cb**, that is, the substring starting at **ath** character and ending at **bth** character. For each **1 ≤ i ≤ L**, chef wants the children to know how many tuples **(a, b, c, d)** exist for which **S1\[a, b\] = S2\[c, d\]** and **length of S1\[a,b\] is i**.

Hopefully Chef will be able to cook in peace now :)

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
The first line of each test case contains a the string **S1**. The second contains the string **S2**. The third line contains the integer **L**.

### Output

For each test case, output a single line containing **L** space separated integers, where the ith integer is number of common substrings of length **i**.

### Constraints

- **1** ≤ **T** ≤ **15**
- All strings are composed of characters **a-z**.
- length of any string ≤ **2\*105**
- In any test file, the sum of lengths of all strings is at most **2\*106**

### Subtask 1(15 points)

**L = 1**

### Subtask 2(20 points)

**L ≤ 10**

### Subtask 3(15 points)

length of any string is at most **200**

### Subtask 4(20 points)

length of any string is at most **5000**

### Subtask 5 (30 points): 

 *No special constraints*

### Example

<pre>
<b>Input:</b>
4
abcd
abcd
3
abab
babc
4
abcbca
acccca
5
abxyz
xyzab
4
<p>
<b>Output:</b>
4 3 2
6 3 1 0
12 1 0 0 0
5 3 1 0
</p>
</pre>
### Explanation

**Example case 2.** Common substrings of length 1 are (a,b,c,d) = (0,0,1,1), (2,2,1,1), (1,1,0,0), (1,1,2,2), (3,3,0,0), (3,3,2,2).

Common substrings of length 2 are (0, 1, 1, 2), (1, 2, 0, 1), (2, 3, 1, 2).

Common substrings of length 3 are (1, 3, 0, 2).

There is no common substring of length 4./>/>/>
