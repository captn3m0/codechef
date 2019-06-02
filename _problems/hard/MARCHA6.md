---
languages_supported:
    - NA
title: MARCHA6
category: NA
old_version: true
problem_code: MARCHA6
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

**The following problem appeared in the [CodeChef March '09 Challenge.](http://www.codechef.com/MARCH09/)**

In the computer science class at the school in Byteland, the teacher handed out the following assignment as homework:

"For an integer *n*, let *bn* denote the bit parity of the binary representation of *n*, i.e. *bn*=0 if *n* has an even number of ones when written down in the binary system, and *bn*=1 otherwise. The numbers *bn*, for *n* >=0, form an infinite sequence of bits (zeros and ones). Given a sequence *c*=(*c*0, ..., *c*p-1) of *p* bits, find the first occurrence of sequence *c* as a subsequence of *b* (i.e., the smallest value of index *k* such that for all *i* between 0 and *p*-1, we have *c**i* = *b**i+k*)."

And the teacher gave his students several short sequences *c*, asking them to provide the answers next day. Most, as expected, wrote programs to solve the task. Only Johnny computed the results by hand, claiming (quite correctly) that it was quicker that way. The teacher, slightly exasperated, decided to teach Johnny a lesson, and prepared a harder assignment, just for him.

"Given a sequence *c*=(*c*0, ..., *c*p-1) of *p* bits, for each *s* between 0 and *p*-1, compute the first occurrence of the prefix (*c*0, ..., *c*s) of sequence *c* as a subsequence of *b*."

And to be doubly sure that Johnny does his homework using a computer, the teacher gave him some really long sequences to deal with. Now, Johnny is in a bit of a spot, because he has never bothered to learn to program. Please help him out!

### Input

The first line of input contains a positive integer *t* < 10, describing the number of tests. Exactly *t* test cases follow.

Each test case is given in two lines. The first line contains integer *p* (1<=*p*<=106, the length of sequence *k*). The next line contains exactly *p* space-separated numbers (0 or 1), denoting successive elements of sequence *c*.

### Output

For each test case, print a line containing exactly *p* space-separated numbers, corresponding to the indexes of the first occurrence of successive prefixes of *c* as subsequences of *b*. All indexes are numbered starting from zero. If there is no such occurrence, output -1.

### Example

<pre>
<b>Input:</b>
1
9
1 0 0 1 0 1 1 1 0

<b>Output:</b>
1 2 4 4 8 8 8 -1 -1
</pre>
**Explanation:**

The first 16 elements of b are:
*0 1 1 0 1 0 0 1 1 0 0 1 0 1 1 0*

The prefix '1' first appears in *b* at index 1,

The prefix '1 0' first appears in *b* at index 2,

The prefixes '1 0 0' and '1 0 0 1' first appear in *b* at index 4,

... and so on.

There are no occurences of '1 0 0 1 0 1 1 1' in sequence *b*.
