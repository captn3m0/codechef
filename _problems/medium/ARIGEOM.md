---
category_name: medium
problem_code: ARIGEOM
problem_name: 'Arigeom Beats'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: ankul_iiita
problem_tester: laycurse
date_added: 29-08-2012
tags:
    - ankul_iiita
    - dec12
    - medium
    - simple
editorial_url: 'http://discuss.codechef.com/problems/ARIGEOM'
time:
    view_start_date: 1355220912
    submit_start_date: 1355220912
    visible_start_date: 1355218200
    end_date: 1735669800
    current: 1493557485
layout: problem
---
All submissions for this problem are available.Our amazing Chef recently met his best friend Joe at his place. Joe is a musician and owns a wide variety of musical instruments. He got introduced to the Arigeom beats in a music training session at Los Angeles. Arigeom beats, as the name suggests, is a combination of two series of beats. One of them has all its frequencies in [arithmetic progression](http://en.wikipedia.org/wiki/Arithmetic_progression) while the other series of beats has all its frequencies in [geometric progression](http://en.wikipedia.org/wiki/Geometric_progression).

A series of beats is represented by a beat notation, which is the sequence of the frequencies at which the beats are played.

To play Arigeom beats, two digital musical instruments are played simultaneously in front of an instrument known as Sono Phone. One instrument plays the beats in arithmetic progression while the other instrument plays the beats in geometric progression. Sono Phone will capture the beats played by each of the two instruments and process them into Arigeom beats. It will merge the beats, sort the beats in ascending order, and remove duplicate beats.

For example, suppose one instruments plays the following beats notation: (2, 5, 8, 11), an arithmetic progression, while the other plays (2, 4, 8, 16), a geometric progression. The resulting Arigeom beat notation recorded by Sono Phone will be (2, 4, 5, 8, 11, 16).

Because Joe knows how to play Arigeom beats, owns the instruments, and has his friend Chef with him as well, he can't wait anymore to play the beats. Joe has an Arigeom beat notation from his music book and decides that he would play the beats in arithmetic progression while Chef will play the beats in geometric progression. The beat notation consists of **N** beat frequencies **F1**, **F2**, ..., **FN**. However, he is now confused as to which subset of the beats has to be played by Chef and which one by himself.

Help Joe and Chef figure out the subsets of beats to be played by Joe and Chef.

### Input

The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows. For each test case, the first line contains an integer **N**. The second line contains **N** space-separated integers **F1**, **F2**, ..., **FN**.

### Output

For each test case, output two lines. The first line contain the beat notation to be played by Joe (in arithmetic progression). The second line contain the beat notation to be played by Chef (in geometric progression). Each beat notation must contain at least two beats. The beats in each beat notation must be sorted in ascending order.

If there are more than one possible pair of beat notations, output any one of them.

### Constraints

1 ≤ **T** ≤ 100
 2 ≤ **N** ≤ 10,000
 1 ≤ **Fi** ≤ 100,000
**F1** < **F2** < ... < **FN**
It is guaranteed that at least one pair of valid beat notations exists.

### Example

```

<b>Input:</b>
4<br></br>6<br></br>2 4 5 8 11 16<br></br>5<br></br>1 2 3 4 5<br></br>8<br></br>1 3 9 10 19 27 28 81<br></br>6<br></br>1 4 7 10 13 25<br></br><b>Output:</b>
2 5 8 11<br></br>2 4 8 16<br></br>1 2 3 4 5<br></br>1 2 4<br></br>1 10 19 28<br></br>1 3 9 27 81<br></br>1 7 13<br></br>4 10 25<br></br><br></br>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>/>
```
### Note

In last example, the common ratio is 2.5 (**non-integer**) even when all the elements of geometric progression sequence are integers.