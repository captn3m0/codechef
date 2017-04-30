---
category_name: medium
problem_code: FAVNUM
problem_name: 'Favourite Numbers'
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
problem_author: xcwgf666
problem_tester: laycurse
date_added: 20-12-2011
tags:
    - aho
    - dynamic
    - july12
    - medium
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/FAVNUM'
time:
    view_start_date: 1342000252
    submit_start_date: 1342000252
    visible_start_date: 1342000252
    end_date: 1735669800
    current: 1493557649
layout: problem
---
All submissions for this problem are available.Chef likes numbers and number theory, we all know that. There are **N** digit strings that he particularly likes. He likes them so much that he defines some numbers to be **beautiful numbers** based on these digit strings.

Beautiful numbers are those numbers whose decimal representation contains **at least one** of chef's favorite digit strings as a substring. Your task is to calculate the **Kth** smallest number amongst the beautiful numbers in the range from **L** to **R** (both inclusive). If the number of beautiful numbers between **L** and **R** is less than **K**, then output "**no such number**".

### Input

In the first line of input there will be integers **L**, **R**, **K** and **N**. Then **N** lines follow. Each line will contain a single string of decimal digits.

### Output

Output one integer - the solution to the problem described above or a string "**no such number**" if there is no such number.

### Constraints

- 1LR
- 1KR-L+1
- 1N
- 1The length of any Chef's favourite digit string


### Example

```

<b>Input:</b>
1 1000000000 4 2
62
63

<b>Output:</b>
163

```

```

<b>Input:</b>
1 1 1 1
2

<b>Output:</b>
no such number

```

```

<b>Input:</b>
1 1000 15 2
6
22

<b>Output:</b>
67

```