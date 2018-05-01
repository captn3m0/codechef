---
category_name: medium
problem_code: CHEFWORD
problem_name: 'Chef and Words'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: null
date_added: 26-03-2014
tags:
    - berezin
    - dynamic
    - matrix
    - medium
    - nov14
editorial_url: 'http://discuss.codechef.com/problems/CHEFWORD'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1493557550
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV14/mandarin/CHEFWORD.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/CHEFWORD.pdf).

Nobody knows but Chef can play with words! He has a word. He claps and each letter of the word transform to another letter(independently)! All letters are only in range **a-z**. For each pair of symbols from **'a'** to **'z'** there is a probability that first symbol will transform into second one after clapping. Note that the symbol can also transform into the same symbol.

Also Chef has a list of words. He asks you what is the probability that after **exactly** **K** claps Chef's word will equal one of the words from list?

### Input

- First line contains integer **T** denoting the number of test cases.
- The first line of each test case contains two integers **N** and **K** denoting the number of words in list and number of clappings.
- The second line contains string **S** denoting the Chef's word.
- Each of the next **26** lines contains **26** space separated doubles. The **jth** double in the **ith** line denotes the probability that the **ith** small letter of English alphabet will transform to the **jth** one afterclapping. Letter **a** has number **1**.
- Each of the next **N** lines contains string **si** - next word from the list.

### Output

- For each test case in a single line print the probability that after exactly **K** clappings the Chef's word will be equal to one from the list. Answer will be considered as correct if absolute difference between the answer and correct answer is less or equal **10^(-6)**

### Constraints

- **1** ≤ **T** ≤ **50**
- The total length of all words in one test file is less or equal **10^6**.
- **1** ≤ **|S|, |si|** ≤ **3**
- **1** ≤ **N** ≤ **10^5**
- **1** ≤ **K** ≤ **10^9**
- 0 ≤ **aij** ≤ **1**
- Sum of **ai, 1** + **ai, 2** + ... + **ai, 26** = 1
- All words contains only letters from **a** to **z**.

### Subtasks

- Subtask **1**: **T** ≤ **50**; **N** ≤ **100**, **K** ≤ **3**. Points: 15
- Subtask **2**: **T** ≤ **50**; The sum of **N** within one test file ≤ **10^5**; **K** ≤ **10^5**. Points: **25**
- Subtask **3**: **T** ≤ 50; **N** ≤ 10^5; **K** ≤ **10^9**. Points: **60**

### Example

<pre><b>Input:</b>
1
4 1
abc
0.25 0.25 0.25 0.25 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
0.50 0.50 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
0.1 0.9 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
daa
bbb
ccc
zz
<b>Output:</b>
0.125000000000000
</pre>### Explanation

<pre>
daa (a->d) * (b->a) * (c->a) | 0.25*0.5*0.1 = 0,0125
bbb (a->b) * (b->b) * (c->b) | 0.25*0.5*0.9 = 0,1125
ccc (a->c) * (b->c) * (c->c) | 0
zz (a->z) * (b->z) * (c can't transform to empty space as it is not allowed).
</pre>