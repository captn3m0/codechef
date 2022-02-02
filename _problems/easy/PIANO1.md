---
category_name: easy
problem_code: PIANO1
problem_name: 'Chef and Piano Scales'
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
problem_author: 'witalij_hq '
problem_tester: null
date_added: 24-02-2015
tags:
    - april15
    - loops
    - simple
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/PIANO1'
time:
    view_start_date: 1428917400
    submit_start_date: 1428917400
    visible_start_date: 1428917400
    end_date: 1735669800
    current: 1493558174
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/APRIL15/mandarin/PIANO1.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL15/russian/PIANO1.pdf).

Recently, Chef got obsessed with piano. He is a just a rookie in this stuff and can not move his fingers from one key to other fast enough. He discovered that the best way to train finger speed is to play scales.

There are different kinds of scales which are divided on the basis of their interval patterns. For instance, major scale is defined by pattern **T-T-S-T-T-T-S**, where **‘T’** stands for a whole tone whereas **‘S’** stands for a semitone. Two semitones make one tone. To understand how they are being played, please refer to the below image of piano’s octave – two consecutive keys differ by one semitone.

If we start playing from first key (note *C*), then we’ll play all white keys in a row (notes *C-D-E-F-G-A-B-C* – as you can see *C* and *D* differ for a tone as in pattern, and *E* and *F* differ for a semitone).

This pattern could be played some number of times (in cycle).

![](http://upload.wikimedia.org/wikipedia/commons/thumb/1/15/PianoKeyboard.svg/250px-PianoKeyboard.svg.png)

Each time Chef takes some type of a scale and plays using some number of octaves. Sometimes Chef can make up some scales, so please don’t blame him if you find some scale that does not exist in real world.

*Formally*, you have a set of **12** keys (i.e. one octave) and you have **N** such sets in a row. So in total, you have **12\*N** keys. You also have a pattern that consists of letters *'T'* and *'S'*, where *'T'* means move forward for two keys (from key **x** to key **x + 2**, and *'S'* means move forward for one key (from key **x** to key **x + 1**).

Now, you can start playing from any of the **12\*N** keys. In one play, you can repeat the pattern as many times as you want, but you cannot go outside the keyboard.

Repeating pattern means that if, for example, you have pattern *STTST*, you can play *STTST* as well as *STTSTSTTST*, as well as *STTSTSTTSTSTTST*, as well as any number of repeating. For this pattern, if you choose to repeat it once, if you start at some key **x**, you'll press keys: **x (letter 'S')-&gt; x + 1 (letter 'T')-&gt; x + 3 (letter 'T')-&gt; x + 5 (letter 'S') -&gt; x + 6 (letter 'T')-&gt; x + 8**. Also **1 ≤ x, x + 8 ≤ 12\*N** so as to avoid going off the keyboard.

You are asked to calculate number of different plays that can be performed. Two plays differ if and only if they start at different keys or patterns are repeated different number of times.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
First line of each test case contains scale’s pattern – string **s** consisting of letters **‘T’** and **‘S’** only.
Second line contains one integer **N** – number of octaves he’ll be using.

### Output

For each test case output a single number in a line corresponding to number of different scales he’ll play.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **|S|** ≤ **100**
- **1** ≤ **n** ≤ **7**

### Subtasks

Subtask 1: **T &lt; 10 4, N = 1**

Subtask 2: No additional constraints.

### Example

<pre><b>Input:</b>
2 
TTTT
1
TTSTTTS
3

<b>Output:</b>
4
36

</pre>
### Explanation

**Example case 1.** In the first case there is only one octave and Chef can play scale (not in cycle each time) starting with notes *C, C#, D, D#* - four together.
