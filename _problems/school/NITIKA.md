---
category_name: school
problem_code: NITIKA
problem_name: 'Whats in the Name'
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
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: iamabjain
problem_tester: null
date_added: 29-06-2017
tags:
    - iamabjain
    - implementation
    - july17
editorial_url: 'https://discuss.codechef.com/problems/NITIKA'
time:
    view_start_date: 1500283800
    submit_start_date: 1500283800
    visible_start_date: 1500283800
    end_date: 1735669800
    current: 1514817146
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY17/mandarin/NITIKA.pdf), [Russian](http://www.codechef.com/download/translated/JULY17/russian/NITIKA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY17/vietnamese/NITIKA.pdf) as well.

Nitika was once reading a history book and wanted to analyze it. So she asked her brother to create a list of names of the various famous personalities in the book. Her brother gave Nitika the list. Nitika was furious when she saw the list. The names of the people were not properly formatted. She doesn't like this and would like to properly format it.

A name can have at most three parts: first name, middle name and last name. It will have at least one part. The last name is always present. The rules of formatting a name are very simple:

- **Only** the first letter of each part of the name should be capital.
- All the parts of the name except the last part should be represented by only two characters. The first character should be the first letter of the part and should be capitalized. The second character should be ".".

Let us look at some examples of formatting according to these rules:

- gandhi -> Gandhi
- mahatma gandhI -> M. Gandhi
- Mohndas KaramChand ganDhi -> M. K. Gandhi

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The only line of each test case contains the space separated parts of the name.

### Output

For each case, output the properly formatted name.

### Constraints

- 1 ≤ **T** ≤ 100
- 2 ≤ Length of each part of the name ≤ 10
- Each part of the name contains the letters from lower and upper case English alphabets (i.e. from 'a' to 'z', or 'A' to 'Z')

### Subtasks

**Subtask #1 (40 points)**

- There is exactly one part in the name.

**Subtask #2 (60 points)**

- Original constraints.

### Example

<pre>
<b>Input:</b>
3
gandhi
mahatma gandhI
Mohndas KaramChand gandhi

<b>Output:</b>
Gandhi 
M. Gandhi 
M. K. Gandhi 
</pre>
### Explanation

The examples are already explained in the problem statement.
