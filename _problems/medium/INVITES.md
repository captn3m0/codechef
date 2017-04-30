---
category_name: medium
problem_code: INVITES
problem_name: 'Party Planning'
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
max_timelimit: '10'
source_sizelimit: '50000'
problem_author: pragrame
problem_tester: tuananh93
date_added: 7-06-2013
tags:
    - cook35
    - medium
    - pragrame
    - tree
editorial_url: 'http://discuss.codechef.com/problems/INVITES'
time:
    view_start_date: 1372012200
    submit_start_date: 1372012200
    visible_start_date: 1414769400
    end_date: 1735669800
    current: 1493557694
layout: problem
---
All submissions for this problem are available.Bilbo is planning his eleventy first birthday. Yes, he will soon be 111 years old. He has to decide whom all to invite to the Party. There are **N** families in the Shire (numbered **1** to **N**), and some families hate others. For example, the Bagginses of Bag End are on bad terms with the Sackville Bagginses. Each family declares which among the **N** families do they hate the most (we call this simply the "**enemy**" of the family).

Given the **N** enemies of each of the **N** families, Bilbo is interested in how many ways can he invite people to his party, such that he does not simultaneously invite some family as well as its enemy. Since the number may be large, output the answer modulo **1000000007**. Two ways are considered different if the set of families invited differ.

### Input

The first line consists of the number of test-cases, **T**. 

Each test case begins with a line having a single integer **N**. 

This is followed by a line having **N** integers: denoting the enemies of each of the **N** families.

### Output

For each test-case, output the number of ways modulo **1000000007** (**109 + 7**).

### Constraints

- **T** ≤ **10**
- **2** ≤ **N** ≤ **105**
- No family is "enemies" with itself

### Example

```

<b>Input:</b>
3
4
2 3 4 1
3
2 1 2
2
2 1

<b>Output:</b>
7
5
3

```
### Explanation

The first test case: {}, {1}, {2}, {3}, {4}, {1,3}, {2,4}

The second test case: {}, {1}, {2}, {3}, {1,3}

The third test case: {}, {1}, {2}