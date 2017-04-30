---
category_name: easy
problem_code: MANYCHEF
problem_name: 'Many Chefs'
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
max_timelimit: '2.013'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: anton_lunyov
date_added: 2-01-2013
tags:
    - cook30
    - greedy
    - laycurse
    - simple
editorial_url: 'http://discuss.codechef.com/problems/MANYCHEF'
time:
    view_start_date: 1358709942
    submit_start_date: 1358709942
    visible_start_date: 1358709858
    end_date: 1735669800
    current: 1493558166
layout: problem
---
All submissions for this problem are available.Chef Ciel wants to put a fancy neon signboard over the entrance of her restaurant. She has not enough money to buy the new one so she bought some old neon signboard through the internet. Ciel was quite disappointed when she received her order - some of its letters were broken. But she realized that this is even better - she could replace each broken letter by any letter she wants. So she decided to do such a replacement that the resulting signboard will contain the word **"CHEF"** as many times as possible.

We can model the signboard as a string **S** having capital letters from **'A'** to **'Z'**, inclusive, and question marks **'?'**. Letters in the string indicate the intact letters at the signboard, while question marks indicate broken letters. So Ciel will replace each question mark with some capital letter and her goal is to get the string that contains as many substrings equal to **"CHEF"** as possible. If there exist several such strings, she will choose the lexicographically smallest one.

**Note 1.** The string **S = S1...SN** has the substring **"CHEF"** if for some **i** we have **SiSi+1Si+2Si+3 = "CHEF"**. The number of times **"CHEF"** is the substring of **S** is the number of those **i** for which **SiSi+1Si+2Si+3 = "CHEF"**.

**Note 2.** The string **A = A1...AN** is called lexicographically smaller than the string **B = B1...BN** if there exists **K** from **1** to **N**, inclusive, such that **Ai = Bi** for **i = 1, ..., K-1**, and **AK < BK**. In particular, **A** is lexicographically smaller than **B** if **A1 < B1**. We compare capital letters by their positions in the English alphabet. So **'A'** is the smallest letter, **'B'** is the second smallest letter, ..., **'Z'** is the largest letter.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains a string **S**.

### Output

For each test case, output a single line containing the content of the signboard Chef Ciel will come up with. That is you should output the lexicographically smallest string that could be obtained from the input string by replacing all its question marks by some capital letters and having as many substrings equal to **"CHEF"** as possible.

### Constraints

- **1** ≤ **T** ≤ **2013**
- **1** ≤ length of **S** ≤ **2013**
- Each character in **S** is either a capital letter from **'A'** to **'Z'**, inclusive, or the question mark **'?'**.

### Example

```

<b>Input:</b>
5
????CIELIS???E?
????CIELISOUR???F
T?KEITE?SY
????????
???C???

<b>Output:</b>
CHEFCIELISACHEF
CHEFCIELISOURCHEF
TAKEITEASY
CHEFCHEF
AAACHEF

```
### Explanation 

**Example Case 1.** Here the resulting string can have at most 2 substrings equal to **"CHEF"**. For example, some possible such strings are:

- **CHEF**CIELISA**CHEF**
- **CHEF**CIELISQ**CHEF**
- **CHEF**CIELISZ**CHEF**

However, lexicographically smallest one is the first one.

**Example Case 3.** Here the resulting string cannot have **"CHEF"** as its substring. Therefore, you must simply output the lexicographically smallest string that can be obtained from the given one by replacing question marks with capital letters.