---
category_name: medium
problem_code: IDOLS
problem_name: 'Idols and Fans'
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
problem_author: kostya_by
problem_tester: rustinpiece
date_added: 31-05-2014
tags:
    - cook47
    - hard
    - heavy
    - kostya_by
    - segment
editorial_url: 'http://discuss.codechef.com/problems/IDOLS'
time:
    view_start_date: 1403464500
    submit_start_date: 1403464500
    visible_start_date: 1403464500
    end_date: 1735669800
    current: 1493557694
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK47/mandarin2/IDOLS2.pdf) and [Russian](http://www.codechef.com/download/translated/COOK47/russian/IDOLS1.pdf) as well.

Mike is a cool kid, so he's the most popular person in his school. All the girls want to be with him while all the boys want to be like him.

There are **N** persons in Mike's school. No person in the school has a name(except Mike), but all of them have a unique ID integer number for the range\[1..**N**\]. Mike's ID equals to 1. Also, each person(except Mike) has his/her _personal idol_, who is another person from the school. Finally, each person **X** has an integer number **AX**.

Let's define functions **F** and **G** for a person with ID equals to **X**:

- If **X** = 1(which means that person **X** is Mike), then **FX** = **AX** and **GX** = 1;
- Otherwise, let **Y** be the personal idol for **X**. 
  - If **FY** + 1 < **AX**, then **FX** = **AX** and **GX** = 1;
  - If **FY** + 1 > **AX**, then **FX** = **FY** + 1 and **GX** = **GY**;
  - If **FY** + 1 = **AX**, then **FX** = **FY** + 1 and **GX** = **GY** + 1.

It's guaranteed, that it's possible to calculate functions **F** and **G** for every person in the school.

You are to write a program, that can efficiently process queries of the following types:

- 0 **X** **NEW\_VALUE** - change the value of **AX** to **NEW\_VALUE**;
- 1 **X** - calculate **FX** and **GX**.

### Input

The first line of the input contains two integers **N** and **Q**, denoting the number of the persons in Mike's school and the number of queries to process.

The second line contains **N** integers **Ai**, denoting **A1**, **A2**, ..., **AN**.

The third line contains **N - 1** integers **Pi**, denoting the personal idols of persons with IDs equal to 2, 3, ..., **N**. 1 ≤ **Pi** < **i**.

The next **Q** lines contain information about the queries. The format of the queries is the same with the one described in the statement.

### Output

For each query of the second type, output a single line containing two integers, **FX** and **GX**.

### Constraints

1 ≤ **N** ≤ 100000;

1 ≤ **Q** ≤ 300000;

1 ≤ **Ai** ≤ 109, for each person;

1 ≤ **X** ≤ **N**, 1 ≤ **NEW\_VALUE** ≤ 109, for each query of the first type.

### Example

```
<b>Input:</b>
5 2
1 2 3 4 5
1 2 3 4
1 5
0 1 100

<b>Output:</b>
5 5

```
### Explanations

In the input, before the second query, **F**'s and **G's** equals to the following:

**ID****F****G**111222333444555After the second query, **F**'s and **G's** equals to the following:

**ID****F****G**1100121011310214103151041