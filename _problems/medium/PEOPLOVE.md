---
category_name: medium
problem_code: PEOPLOVE
problem_name: 'Love among People'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: null
date_added: 23-06-2016
tags:
    - admin2
time:
    view_start_date: 1467052140
    submit_start_date: 1467052140
    visible_start_date: 1467052140
    end_date: 1735669800
    current: 1493557845
layout: problem
---
All submissions for this problem are available.There are **n** people in a group. Some of them love each other. You are given **m** such relationships. Each relationship is represented by two integers **u, v**, denoting that person **u** and **v** love each other.

One day the people went to a magician asking about an issue bothering them for long time. The magician said "It is not a good omen if two persons love each other. There is no joy in the love if you get reciprocated for your love. So from now on, you guys have to make sure that whoever loves each other among you should decide the person who will be loved and who will love.".

Formally, he asked each pair of persons **u, v** which used to love each other to decide among themselves whether **u** will love **v** or **v** will love **u**, but both of them can't love each other.

Truly scared and saddened by the magician's suggestion, people decided that they will change their relationships according to the suggestion. Soon they realized that by following the suggestion blindly it might happen that a person loves a lot of other people and in turn very few people love him, which will make a person really sad :(. Sometimes it might also happen a lot of persons love a person, but that person loves too less persons, in that case also, he will feel sad too. In particular, sadness of a person will be equal to absolute difference of the number of persons that he loves and number of persons that love him.

Now they want people to be as less sad as possible. Formally, they want to minimize the maximum value of sadness over all the persons in the group. Can you please help them in this daunting task? Formally, you have to tell for each loving pair **u, v**, which way the love should be?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

First line of the each test case contains two space separated integer **n, m** denoting the number of persons and number of their love relationships.

Each of the next **m** lines contains two space separated integers **u, v** denoting that persons **u** and **v** love each other.

### Output

For each test case, output **m + 1** lines.

First line should contain a single integer the minimum value of maximum sadness over all persons that they can achieve.

In the next **m** lines, **i**-th line should contain two space separated integers **u, v** denoting that person **u** loves person **v**. If **v** loves person **u**, then print **v, u**.

Please note that there can be more than one possible ways of changing the relationships. In those situations, you are allowed to print any of them

### Constraints

- 1 ≤ **T** ≤ **106**
- 1 ≤ **N** ≤ **105**
- Sum of **N**'s' over all the test cases in a single file won't exceed **106**

### Subtasks

**Subtask #1 (30 points)**

- You just have to tell the minimum value of maximum sadness factor. You don't require to print one such way of changing relationships. Note that if you want to solve this subtask only, the first line of your output should be "SMALL\_SUBTASK" (without quotes). After that, for each test case, you should just print the first line corresponding the minimum of maximum sadness.

**Subtask #2 (70 points)**

- For solving this subtask, your should print first line as "BOTH\_SUBTASKS" (without quotes). The output format for this case will be similar to that is written in output section.

### Example

<pre><b>Input</b>
2
2 1
1 2
3 2
1 2
2 3

<b>Output:</b>
<b>For solving both the subtasks.</b>
BOTH_SUBTASKS
1
1 2
1
1 2
3 1

<b>For solving only a single subtask</b>
SMALL_SUBTASK
1
1
</pre>### Explanation

**Example case 1.** There are two persons. Person 1 and 2 love each other. Now, according to magician's suggestion, if person 1 loves person 2, then sadness of both the persons will be equal to 1. Same is the case with person 2 loving person 1. Hence answer is 1.

**Example case 2.** There are three persons. Person 1 and 2 love each other. Person 2 and 3 love each other. Now, according to magician's suggestion, if person 1 loves person 2 and person 3 loves 1. Then, sadness of all three persons will be equal to 1. This is the best that they can do. For example, if the person 1 loves 2 and person 1 loves 3 too, then sadness of first person will be 2, which will be worse than previous case. Hence answer is 1.
