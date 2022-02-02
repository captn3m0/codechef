---
category_name: easy
problem_code: CHBLLS
problem_name: 'Chef and Balls'
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
problem_author: antoniuk1
problem_tester: kevinsogo
date_added: 12-02-2016
tags:
    - antoniuk1
    - logic
    - may16
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHBLLS'
time:
    view_start_date: 1463391000
    submit_start_date: 1463391000
    visible_start_date: 1463391000
    end_date: 1735669800
    current: 1493558115
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY16/mandarin/CHBLLS.pdf) and [Russian](http://www.codechef.com/download/translated/MAY16/russian/CHBLLS.pdf) as well.

Chef has bought ten balls of five colours. There are two balls of each colour. Balls of same colour have same weight. Let us enumerate colours by numbers from 1 to 5. Chef knows that all balls, except two (of same colour), weigh exactly one kilogram. He also knows that each of these two balls is exactly 1 kg heavier than other balls.

You need to find the colour which balls are heavier than others.

To do that, you can use mechanical scales with two weighing pans. As your scales are very accurate, you can know the exact difference of weights of objects from first and second pans. Formally, the scales will give you the difference (signed difference) of weights of the objects put into the first pan and the second pan. See the following examples for details.

- If you put two balls of the same colour on your scales, each ball to one pan, the scales will tell you that difference is "0".
- But if you put into the first pan some balls of total weight 3 kg, and into the second pan of 5 kg, then scales will tell you "-2" because the second pan is 2 kg heavier than first.
- Similarly, if you put 5 kg weight in first pan and 3 kg in the second pan, then scale will tell you "2" as first pan is 2 kg heavier than second.

### Input &amp; Output

- The interaction process have two phases. At first phase you perform sequence of weighings on the mechanical scales. At the second phase you should output the colour of the heavier balls.
- To use the mechanical scales, you should print "1"(without quotes) and then print two lines, the first line will describe the enumeration of colours of balls on the first pan and second line should that of second pan.
- To describe some pan, you need to print one integer **n** - the number of balls you put in this pan, followed by **n** space-separated integers - colours of the balls you put in this pan.
- Once you have printed required data, you can read from the standard input one integer - the difference of weights of the first and the second pans.
- To output the colour of the heavier balls, you should print "2"(without quotes) and one integer in next line - colour of the heavier balls.

### Constraints

- Each colour you print should be between 1 and 5.
- In each weighings, you can use at most two balls of same colour.
- Note that you can use scales as much times as you want (even zero).
- Once your program printed the colour of the heavier balls, it should finish its work, i.e. you should exit the program.
- Do not forget to **flush** standard output after each line you print.

### Subtasks

- If you output incorrect colour (i.e. colour you printed is not that of heavier balls), your score will be zero.
- Let **K** will be the number of times you used scales.
- Then your score will be **100/K** points.
- Please note that if **K** equals to zero, your score also will also be 100 points.

### Example 1

Please note that the content in left side denotes output of your program where content in the right side denotes the response of judge which you should read as input.

<pre><b>Input and Output</b>
1
1 1
1 1	
					0
1
1 1
1 5
					-1
2
5
</pre>
### Example 2

<pre><b>Input and Output</b>
1
3 1 2 5
0
					4
1
0
1 2
					-1
1
0
1 5
					-2
2
5
</pre>
### Explanation

In the **first example**, you first printed :

<pre>
1
1 1
1 1
</pre>
This means that you want to use the scale. Each of the first and second pan has one ball of colour 1. Don't forget to flush the standard output after printing this.

After that you should read the input, the difference of weights between the two pans, in this case, it will be 0.

Now you printed :

<pre>
1
1 1
1 5
</pre>
It means, that you decided to use scale again. Now first pan contains one ball of colour 1 and the second pan contains one ball of colour 5.

Now, you should read the input, the difference of weights between the two pans, in this case, it will be -1.

Now, you realize that ball of colour 5 is heavier than of colour 1. It means that 5th colour is the colour of heaviest ball. So your print 2 followed by 5 in separate lines and exit your program.

You have used scale total 2 times. Hence your score will be 100/2 = 50.

In the **second example**, your score will be 100 / 3 = 33.3333333

### Notes

Please note that clearing the output buffer can be done by using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout). Failure to flush the output buffer will result in Time Limit Exceeded verdict.

There are 5 test files. For each of the test file, score you will get is described above. The total sum of scores of your program for all the test files will be displayed on the contest page. This will be considered your final score for the problem.

Total points awarded for this problem will be equal to (your score) / (best score achieved in the contest) \* 100.
