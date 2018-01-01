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

"For an integer _n_, let _bn_ denote the bit parity of the binary representation of _n_, i.e. _bn_=0 if _n_ has an even number of ones when written down in the binary system, and _bn_=1 otherwise. The numbers _bn_, for _n_ >=0, form an infinite sequence of bits (zeros and ones). Given a sequence _c_=(_c_0, ..., _c_p-1) of _p_ bits, find the first occurrence of sequence _c_ as a subsequence of _b_ (i.e., the smallest value of index _k_ such that for all _i_ between 0 and _p_-1, we have _c__i_ = _b__i+k_)."

And the teacher gave his students several short sequences _c_, asking them to provide the answers next day. Most, as expected, wrote programs to solve the task. Only Johnny computed the results by hand, claiming (quite correctly) that it was quicker that way. The teacher, slightly exasperated, decided to teach Johnny a lesson, and prepared a harder assignment, just for him.

"Given a sequence _c_=(_c_0, ..., _c_p-1) of _p_ bits, for each _s_ between 0 and _p_-1, compute the first occurrence of the prefix (_c_0, ..., _c_s) of sequence _c_ as a subsequence of _b_."

And to be doubly sure that Johnny does his homework using a computer, the teacher gave him some really long sequences to deal with. Now, Johnny is in a bit of a spot, because he has never bothered to learn to program. Please help him out!

### Input

The first line of input contains a positive integer _t_ < 10, describing the number of tests. Exactly _t_ test cases follow.

Each test case is given in two lines. The first line contains integer _p_ (1<=_p_<=106, the length of sequence _k_). The next line contains exactly _p_ space-separated numbers (0 or 1), denoting successive elements of sequence _c_.

### Output

For each test case, print a line containing exactly _p_ space-separated numbers, corresponding to the indexes of the first occurrence of successive prefixes of _c_ as subsequences of _b_. All indexes are numbered starting from zero. If there is no such occurrence, output -1.

### Example

<pre>
<b>Input:</b>
1
9
1 0 0 1 0 1 1 1 0

<b>Output:</b>
1 2 4 4 8 8 8 -1 -1

</pre>**Explanation:**
The first 16 elements of b are:
_0 1 1 0 1 0 0 1 1 0 0 1 0 1 1 0_

The prefix '1' first appears in _b_ at index 1,

The prefix '1 0' first appears in _b_ at index 2,

The prefixes '1 0 0' and '1 0 0 1' first appear in _b_ at index 4,

... and so on.

There are no occurences of '1 0 0 1 0 1 1 1' in sequence _b_.
