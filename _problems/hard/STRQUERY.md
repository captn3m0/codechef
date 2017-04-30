---
category_name: hard
problem_code: STRQUERY
problem_name: 'String Query'
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
problem_author: wjmzbmr
problem_tester: laycurse
date_added: 4-03-2013
tags:
    - april13
    - hard
    - suffix
    - treap
    - wjmzbmr
editorial_url: 'http://discuss.codechef.com/problems/STRQUERY'
time:
    view_start_date: 1366018200
    submit_start_date: 1366018200
    visible_start_date: 1366018200
    end_date: 1735669800
    current: 1493556853
layout: problem
---
All submissions for this problem are available.Hey, you've got a new mission! This time your client ask you to write a editor and it should run fast! However the client's request is somehow strange, but they give a lot of money so your boss ask you to finish it as fast as possible.

This editor deal with a string **S**. And the length **|S|** of the string **S** would never be smaller than **10**. This editor must support the following **7** operations quickly. Here the string would be indexed starting at .

1. INSERT\_LEFT **c** : insert character **c** at the beginning of **S**
2. INSERT\_RIGHT **c** : insert character **c** at the end of **S**
3. INSERT\_MIDDLE **c** : insert character **c** at the middle of **S** (before the **(|S| div 2)**-th character)
4. DELETE\_LEFT : delete the first character of **S**
5. DELETE\_RIGHT : delete the last character of **S**
6. DELETE\_MIDDLE : delete the middle character of **S** (the **(|S| div 2)**-th character)
7. QUERY **q** : print how many times the string **q** occur in **S**. (overlap is allowed)

Here **div** means integer division, that is, **|S| div 2** = **floor(|S| / 2)**.

### Input

The first line of input contains the initial string **SInit**. The second line contains one integer **Q**, denoting the number of operations. Then each of the next **Q** lines contains an operation with the format mentioned above.

### Output

For each QUERY operation, print the answer in a line.

### Constraints

- **1** ≤ **Q** ≤ **150000** (**1.5 \* 105**)
- **|SInit|** = **10**
- **SInit**, **q** contain only lower Latin letters ('a'-'z').
- **c** is a lower Latin letter ('a'-'z').
- The total length of the string **q** over all the queries does not exceed **1500000** (**1.5 \* 106**).
- The DELETE\_LEFT, DELETE\_RIGHT, DELETE\_MIDDLE operations do not appear when **|S|** = **10**.

### Example

```

<b>Input:</b>
bbabaaaaab
12
INSERT_MIDDLE b
INSERT_LEFT b
INSERT_MIDDLE b
INSERT_MIDDLE b
INSERT_RIGHT a
INSERT_LEFT a
INSERT_MIDDLE b
INSERT_LEFT a
INSERT_MIDDLE a
QUERY bbaaa
DELETE_MIDDLE
DELETE_MIDDLE

<b>Output:</b>
1

```
### Explanation

In the sample, the string **|S|** will be changed as follows:

```

bbabaaaaab (<b>S<sub>Init</sub></b>)
bbababaaaab (after INSERT_MIDDLE b)
bbbababaaaab (after INSERT_LEFT b)
bbbababbaaaab (after INSERT_MIDDLE b)
bbbababbbaaaab (after INSERT_MIDDLE b)
bbbababbbaaaaba (after INSERT_RIGHT a)
abbbababbbaaaaba (after INSERT_LEFT a)
abbbababbbbaaaaba (after INSERT_MIDDLE b)
aabbbababbbbaaaaba (after INSERT_LEFT a)
aabbbababab<b>bbaaa</b>aba (after INSERT_MIDDLE a)
aabbbababbbbaaaaba (after DELETE_MIDDLE)
aabbbababbbaaaaba (after DELETE_MIDDLE)

```
For QUERY bbaaa, this string occurs once. It is shown in boldface type.