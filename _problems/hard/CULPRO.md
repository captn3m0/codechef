---
category_name: hard
problem_code: CULPRO
problem_name: 'Cultural Programme'
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
problem_author: yogesh01
problem_tester: null
date_added: 13-11-2014
tags:
    - easy
    - inpr1501
    - yogesh01
time:
    view_start_date: 1422551127
    submit_start_date: 1422551127
    visible_start_date: 1422551127
    end_date: 1735669800
    current: 1493556676
layout: problem
---
All submissions for this problem are available.The Siruseri Welfare Association has organized a Cultural Programme for families in the area, to build up community spirit. The Cultural Programme is being held at the Siruseri Community Hall. Inside the hall, children perform songs and dances. Outside, local restau- rants have set up stalls selling snacks.

As is typical on such an occasion, members of the audience drift in and out of the hall during the programme. An observant office bearer of the Siruseri Welfare Association notes down the times at which people enter and leave the hall. Suppose that is N. He wants to know the maximum size of the audience was during the course of the programme.

For convenience, he writes down each time as a single integer - Ai, the number of minutes from the start of the programme for the ith person. Also, the door of the hall is narrow, so at any time, either  **one person**  can enter or one person can leave the hall, but not both. Thus, each entry and exit time that is noted down is distinct.

For example, suppose the observations noted down are the following. Each line denotes the entry time and exit time of one person. (The identity of the person is not important—the same person may enter and leave the hall many times. For instance, in the example below, it might well be that the entries and exits recorded at Serial Nos 2 and 5 refer to the same person.)

![](/download/extimages/b52370c3ee7ab763d0b6ce064ba40193.png)

Your task is to read the list of entry and exit times and compute the  **maximum size**  of the audience during the programme.

### **Input**

The first line of input is a single integer, N, the number of entries and exits recorded. This is followed by N lines of input. Each of these lines consists of two integers, separated by a space, describing one entry and exit. The first integer is the entry time and the second integer is the exit time..

### **Output**

A single integer, denoting the maximum size of the audience during the performance.

### **Constraints**

- 1 ≤ N ≤ 105
- 1 ≤ Ai ≤ 107

### **Example**

****Sample Input:****

5
1 7
2 4
6 9
3 8
5 10

****Sample Output:****

4