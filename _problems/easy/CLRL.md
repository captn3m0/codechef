---
category_name: easy
problem_code: CLRL
problem_name: 'Chef goes Left Right Left'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
    - kotlin
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
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: abizerl123
problem_tester: null
date_added: 20-10-2017
tags:
    - abizerl123
    - cakewalk
    - nov17
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1514816001
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/CLRL.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/CLRL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/CLRL.pdf) as well.

Chef is at a Code Expo where many coders are present discussing, solving, sharing, and eavesdropping on solutions :P

He recently learnt that a former HackerPlant employee, Reziba, who is now working at KodeKarma stole some questions for their KoolKontest. Chef wants to find Reziba, but the only data he has on him, and everyone else present, are their CodeXP ratings, which are distinct.

Chef decides to find Reziba through his rating by asking different people present at the expo. Everyone present are arranged in such a way that, assuming a person with rating X, every person with a rating higher than X are on the person's right, while every person with a rating lower than X are on the person's left.

Everyone present there knows Reziba's rating, except Chef, who now asks people where he could find Reziba.

Chef initially asks an arbitrary person, who replies by giving information on whether Reziba is to the person's left or the person's right, depending on whether this person has a higher or lower rating than Reziba.
Chef proceeds in that direction for an arbitrary distance and stops and asks the next person encountered, and repeats this procedure.
 However, Chef will never go beyond a person whose rating Chef has asked before. For example, if Chef was walking to the left and finds a person who already told him to walk to the right then he will not continue going to the person's left. 
Chef finally finds Reziba when he finally stops in front of Reziba.

During Chef's search for Reziba, he wrote the sequence of ratings of the people Chef asked in the exact same order, including Reziba's rating, which is the last integer in the sequence.
Towards the end, Chef feels he might've made a mistake while writing this sequence.

Given the sequence that Chef wrote and Reziba's rating, find out whether this sequence is possible or has mistakes.

### Input

- First line contains number of test cases **T**.
- The first line of each test case contains the number of people Chef meets, **N** and Reziba's rating **R** seperated by a space.
- Second line of each test case contains **N** number of space separated ratings from **A1** to **AN** where **AN** is always equal to **R**.

### Output

- For each test case, output a singe line with either "YES" if the sequence is correct, or print "NO" if the sequence has mistakes, without quotes.

### Constraints

- **1** ≤ **T** ≤ **50**
- **1** ≤ **N** ≤ **106**
- **1** ≤ sum of **N** in all test-cases ≤ **1.5\*106**
- **1** ≤ **Ai** ≤ **109**
- Integers in **A** are distinct
- **AN** = R

### Subtasks

- **Subtask #1**: N ≤ 20
- **Subtask #2**: Original Constraints

### Example

<pre><b>Input:</b>
2
5 200
600 300 100 350 200
5 890
5123 3300 783 1111 890
<p></p>
<b>Output:</b>
NO
YES

</pre>### Explanation
**Example case 1.**The first person that Chef asked has a rating of 600, which is more than 200 so he tells Chef to go to his left. The second person Chef meets has a rating of 300, also tells Chef to go to the left. The third person that chef asked has a rating of 100 so he tells Chef to go to the right. Then Chef asked a person with rating 350, that means Chef went beyond the person with rating of 300, which should never happen, so Chef must have made a mistake while writing this sequence.
