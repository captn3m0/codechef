---
category_name: easy
problem_code: KGOOD
problem_name: 'K-good Words'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kevinsogo
problem_tester: 'kevinsogo,xcwgf666,antoniuk1'
date_added: 25-05-2016
tags:
    - easy
    - greedy
    - kevinsogo
    - snckql16
    - strings
editorial_url: 'http://discuss.codechef.com/problems/KGOOD'
time:
    view_start_date: 1464708600
    submit_start_date: 1464708600
    visible_start_date: 1464708600
    end_date: 1735669800
    current: 1493558156
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKQL16/mandarin/KGOOD.pdf), [Russian](http://www.codechef.com/download/translated/SNCKQL16/russian/KGOOD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKQL16/vietnamese/KGOOD.pdf) as well.

Chef Al Gorithm was reading a book about climate and oceans when he encountered the word “**glaciological**”. He thought it was quite curious, because it has the following interesting property: For every two letters in the word, if the first appears **x** times and the second appears **y** times, then **|x - y| ≤ 1**.

Chef Al was happy about this and called such words **1-good** words. He also generalized the concept: He said a word was **K-good** if _for every two letters in the word, if the first appears **x** times and the second appears **y** times, then **|x - y| ≤ K**_.

Now, the Chef likes **K**-good words a lot and so was wondering: Given some word **w**, how many letters does he have to remove to make it **K**-good?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case consists of a single line containing two things: a word **w** and an integer **K**, separated by a space.

### Output

For each test case, output a single line containing a single integer: the minimum number of letters he has to remove to make the word **K**-good.

### Constraints

- **1** ≤ **T** ≤ **30**
- **1** ≤ **|w|** ≤ **105**
- 0 ≤ **K** ≤ **105**
- **w** contains only lowercase English letters.

### Example

<pre><b>Input:</b>
4
glaciological 1
teammate 0
possessions 3
defenselessness 3

<b>Output:</b>
0
0
1
2
</pre>### Explanation

**Example case 1.** The word “**glaciological**” is already 1-good, so the Chef doesn't have to remove any letter.

**Example case 2.** Similarly, “**teammate**” is already 0-good.

**Example case 3.** The word “**possessions**” is 4-good. To make it 3-good, the Chef can remove the last **s** to make “**possession**”.

**Example case 4.** The word “**defenselessness**” is 4-good. To make it 3-good, Chef Al can remove an **s** and an **e** to make, for example, “**defenslesness**”. Note that the word doesn't have to be a valid English word.
