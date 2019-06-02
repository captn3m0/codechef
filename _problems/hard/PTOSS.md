---
category_name: hard
problem_code: PTOSS
problem_name: 'Pizza Tossing'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: yellow_agony
problem_tester: gamabunta
date_added: 9-03-2012
tags:
    - cook26
    - kmp
    - medium
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/PTOSS'
time:
    view_start_date: 1348428165
    submit_start_date: 1348428165
    visible_start_date: 1348427700
    end_date: 1735669800
    current: 1493556794
layout: problem
---
All submissions for this problem are available.We all know that Chef has a special pizza recipe. The pizza has been a craze all over Bhiwani. The secret of the softness of the pizza lies in the fact that Chef tosses them high in the air before putting them in the oven. He makes a lot of pizzas each day to fulfil the ever-increasing demand.

At some point of the time, Chef got bored. Therefore, he created a game for himself. Assume that the pizza has two sides: front side denoted by F, and back side denoted by B. He owns a lucky sequence of sides; i.e., a string of length N over alphabet {F, B}.

Chef will toss the pizza many times. After every toss, he will jot down the side that comes up. All tosses are independent and each side has equal probability of coming up (50%). He has made M tosses today. He will keep tossing until the string denoting last N tosses is equal to his lucky sequence.

Count the expected number of additional tosses Chef will make.

### Input

The first line contain a single integer T, the number of test cases. Then T description of test cases follow. Each description consists of two lines. The first line contains a single integer N followed by a string S1, separated by a space. The second line contains a single integer M followed by a string S2, separated by a space.

The string S1 is the encoded form of the lucky sequence. S1 will contain only characters 'a' - 'z' (that stand for values 0 - 25), and 'A' - 'F' (that stand for values 26 - 31). To decode S1, concatenate the values as 5-bit binary numbers of each character of S1. Then, replace 0's with F's and 1's with B's. Chef's lucky sequence is the first N characters in the resulting string.

The string S2 is the encoded form of the sequence of sides Chef has already tossed today, in the same way.

Please see the examples for more clarity.

### Output

For each test case, output a single line containing the expected number of additional tosses Chef will make. It can be proved that the answers will always be an integer. Since the answers can be very large, output each answer modulo 1,000,000,007. Note that if Chef has already achieved his lucky sequence today, he can stop right away and therefore you should output 0.

### Example

<pre>
<b>Input:</b>
3
1 a
0 a
3 a
2 a
8 An
3 B

<b>Output:</b>
2
8
254
</pre>
### Explanation

In the third case, for the lucky sequence, 'A' stands for 26 and its 5-bit binary number is 11010. 'n' stands for 13 and its 5-bit binary number is 01101. Concatenate them to get 1101001101. The decoded string will be BBFBFFBBFB. Chef's lucky sequence is the first eight characters, i.e., BBFBFFBB.

### Constraints

1 ≤ |S1|, |S2| ≤ 200,000
1 ≤ N ≤ 5 × |S1|
0 ≤ M ≤ 5 × |S2|
(sum of |S1| for all S1) ≤ 1,000,000
(sum of |S2| for all S2) ≤ 1,000,000
(|S| denotes the number of characters of S.)
