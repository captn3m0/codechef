---
category_name: easy
problem_code: CAKEDOOM
problem_name: 'Doom Bakes Cakes'
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
problem_author: kaushik_iska
problem_tester: anton_lunyov
date_added: 16-04-2012
tags:
    - greedy
    - june12
    - kaushik_iska
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CAKEDOOM'
time:
    view_start_date: 1339403523
    submit_start_date: 1339403523
    visible_start_date: 1339407000
    end_date: 1735669800
    current: 1493558213
layout: problem
---
All submissions for this problem are available.*From the FAQ:*

### What am I allowed to post as a comment for a problem?

**- Do NOT post code.
- Do NOT post a comment asking why your solution is wrong.
- Do NOT post a comment asking if you can be given the test case your program fails on.
- Do NOT post a comment asking how your solution can be improved.
- Do NOT post a comment giving any hints or discussing approaches to the problem, or what type or speed of algorithm is required.** ### Problem Statement

Chef Doom has decided to bake a circular cake. He wants to place **N** colored cherries around the cake in a circular manner. As all great chefs do, Doom doesn't want any two adjacent cherries to have the same color. Chef has unlimited supply of cherries of **K** ≤ **10** different colors. Each color is denoted by the digit from the set **{0, 1, ..., K – 1}**. Different colors are denoted by different digits. Some of the cherries are already placed and the Chef wants you to place cherries in the remaining positions. He understands that there can be many such arrangements, so in the case when the answer is not unique he asks you to find the lexicographically smallest one.

What does it mean?

Let's numerate positions for the cherries by the numbers **1**, **2**, ..., **N** starting from one of the positions in a clockwise direction. Then the current (possibly partial) arrangement of the cherries can be represented by a string of **N** characters. For each position **i** of the arrangement if the cherry of the color **C** is placed at this position then the **i**th character of the string is equal to the digit **C**. Otherwise, it is equal to the question mark **?**. We identify the arrangement with the string that represents it.

One arrangement is called *lexicographically smaller* than the other arrangement if at the first position where they differ the first one has smaller digit (we compare only complete arrangements so we don't care about relation between digits and the question mark). For example, the arrangement **1230123** is lexicographically smaller than **1231230** since they have first **3** equal characters but the **4**th character in the first arrangement is 0 and it is less than **1** which is the **4**th character of the second arrangement.

**Notes**

- The cherries at the first and the last positions are adjacent to each other (recall that we have a circular cake).
- In the case **N** = **1** any arrangement is valid as long as the color used for the only cherry of this arrangement is less than **K**.
- Initial arrangement can be already invalid (see the case 3 in the example).

Just to make all things clear. You will be given a usual string of digits and question marks. Don't be confused by circular stuff we have in this problem. You don't have to rotate the answer once you have replaced all question marks by the digits. Think of the output like the usual string for which each two consecutive digits must be different but having additional condition that the first and the last digits must be also different (of course if N > 1).

Next, you don't have to use all colors. The only important condition is that this string should be lexicographically smaller than all other strings that can be obtained from the input string by replacement of question marks by digits and of course it must satisfy conditions on adjacent digits.

One more thing, K here is not the length of the string but the number of allowed colors. Also we emphasize that the given string can have arbitrary number of question marks. So it can have zero number of question marks as well as completely consists of question marks but of course in general situation it can have both digits and question marks.

OK. Let's try to formalize things in order to make all even more clear. You will be given an integer K and a string S=S\[1\]S\[2\]...S\[N\] where each S\[i\] is either the decimal digit less than K or the question mark. We are serious. In all tests string S can have only digits less than K. Don't ask about what to do if we have digit ≥ K. There are no such tests at all! We guarantee this! OK, let's continue. Your task is to replace each question mark by some digit strictly less than K. If there were no question marks in the string skip this step. Now if N=1 then your string is already valid. For N > 1 it must satisfy the following N conditions S\[1\] ≠ S\[2\], S\[2\] ≠ S\[3\], ..., S\[N-1\] ≠ S\[N\], S\[N\] ≠ S\[1\]. Among all such valid strings that can be obtained by replacement of question marks you should choose lexicographically smallest one. I hope now the problem is really clear.

### Input

The first line of the input file contains an integer **T**, the number of test cases. **T** test cases follow. Each test case consists of exactly two lines. The first line contains an integer **K**, the number of available colors for cherries. The second line contains a string **S** that represents the current arrangement of the cherries in the cake.

### Constraints

**1** ≤ **T** ≤ **1000**

**1** ≤ **K** ≤ **10**

**1** ≤ **|S|** ≤ **100**, where **|S|** denotes the length of the string **S**

Each character in **S** is either the digit from the set **{0, 1, ..., K – 1}** or the question mark **?**

### Output

For each test case output the lexicographically smallest valid arrangement of the cherries in the cake that can be obtained from the given arrangement by replacement of each question mark by some digit from 0 to **K – 1**. If it is impossible to place the cherries output **NO** (output is case sensitive).

### Example

<pre>
<b>Input:</b>
7
1
?
2
?0
10
79259?087
2
??
3
0?1
4
?????
3
012

<b>Output:</b>
0
10
NO
01
021
01012
012
</pre>
### Explanation

**Case 2.** The only possible replacement here is **10**. Note that we output **10** since we **can not rotate the answer** to obtain **01** which is smaller.

**Case 3.** Arrangement is impossible because cherries at the first and the last positions are already of the same color. Note that **K = 10** but the string has length **9**. It is normal. **K** and **|S|** don't have any connection.

**Case 4.** There are two possible arrangements: **01** and **10**. The answer is the first one since it is lexicographically smaller.

**Case 5.** There are three possible ways to replace question mark by the digit: **001**, **011** and **021**. But the first and the second strings are not valid arrangements as in both of them there exists an adjacent pair of cherries having the same color. Hence the answer is the third string.

**Case 6.** Note that here we do not use all colors. We just find the lexicographically smallest string that satisfies condition on adjacent digit.

**Case 7.** The string is already valid arrangement of digits. Hence we simply print the same string to the output.
