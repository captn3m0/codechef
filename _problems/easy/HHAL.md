---
category_name: easy
problem_code: HHAL
problem_name: Harrenhal
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
problem_author: kostya_by
problem_tester: stzgd
date_added: 27-07-2014
tags:
    - ad
    - cakewalk
    - kostya_by
    - ltime15
editorial_url: 'http://discuss.codechef.com/problems/HHAL'
time:
    view_start_date: 1409473800
    submit_start_date: 1409473800
    visible_start_date: 1409473800
    end_date: 1735669800
    current: 1493558152
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME15/mandarin/HHAL.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME15/russian/HHAL.pdf).

_Harrenhal is the largest castle in the Seven Kingdoms and is the seat of House Whent in the Riverlands, on the north shore of the Gods Eye lake. Since the War of Conquest, however, it has become a dark and ruinous place._

(c) A Wiki of Ice and Fire

![](/download/extimages/222e62c80f133b6570391157b2329a24.jpg)

Now Harrenhal is too dangerous since it's a nice place for bandits to hide, or even for rebels to start planning overthrowing of the king. So, the current Lord of the Seven Kingdoms has decided, that it's time to completely ruin the castle. For that puposes, he's planning to send some military troops.

In this problem we assume, that Harrenhal can be described as a string **H**, which consists only of symbols _'a'_ and _'b'_. Harrenhal is completely ruined if and only if the length of **H** is equal to zero.

So, how to make **H** empty? Send a military troop! When a military troop of the king reach the castle, they delete some palindromic subsequence **S** of **H**. For example, let **H** = _'abbabaab'_. Then the current military troop can choose **S** = _'ababa'_(Let's make symbols of **S** bold in **H**: _'**ab**b**ab**a**a**b'_). After deleting **S**, **H** will be equal to _'bab'_. Military troops are free to choose any possible palindromic subsequence of **H**.

Your task is pretty simple: determine the minimal number of military troops, that the Lord of the Seven Kingdoms has to send in order to ruin Harrenhal.

### Note

Maybe, some of you aren't familiar with definitions from the statement. Here're some articles that could help you to understand the problem correctly:

- Subsequence: <http://en.wikipedia.org/wiki/Subsequence>
- Palindrome: <http://en.wikipedia.org/wiki/Palindrome>

### Input

The first line of the input contains an integer **T**, denoting the number of test cases.

The next **T** lines contain a string **H** each, denoting the string, that describes the current state of Harrenhal for the corresponding test cases.

It's guaranteed, that each **H** consists only of symbols _'a'_ and _'b'_.

### Output

The output should contain exactly **T** lines. **i**'th line of the output should contain the only integer: the minimal number of military troops, that the Lord of the Seven Kingdoms has to send in order to ruin Harrenhal for the corresponding test cases.

### Constraints

- 1 ≤ **|H|** ≤ 100000, for each **H**.
- Subtask 1(30 points): each **H** in the input is a palindrome, 1 ≤ **T** ≤ 6;
- Subtask 2(70 points): 1 ≤ **T** ≤ 9.

### Example

<pre><b>Input:</b>
1
abbabaab

<b>Output:</b>
2

</pre>### Explanation
There're multiple ways to ruin Harrenhal in the example test. Let's consider one of them.

The first troop can delete **S** = _'ababa'_(_'**ab**b**ab**a**a**b'_). After that, **H** = _'bab'_.

The second troop can delete **S** = _'bab'_(_'**bab**'_). After that, **H** is empty and that's it.
