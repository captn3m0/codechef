---
category_name: challenge
problem_code: DARTS
problem_name: DARTS501
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: 'iscsi '
problem_tester: null
date_added: 12-03-2014
tags:
    - challenge
    - expectation
    - iscsi
    - june14
editorial_url: 'http://discuss.codechef.com/problems/DARTS'
time:
    view_start_date: 1402911000
    submit_start_date: 1402911000
    visible_start_date: 1402911000
    end_date: 1735669800
    current: 1528985566
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JUNE14/mandarin/DARTS1.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE14/russian/DARTS1.pdf).

Note: This is an interactive problem. Interactive problems differ from classic problems in that your solution will send and receive data from a special judge program instead of from static files. Pay special attention to the notice on output buffering described in the "Input + Output" section below.

In this problem you will play the most famous darts game: 501 with double out.

The dartboard is circular board, divided into 20 numbered sections, scoring from 1 to 20 points, by wires running from the small central circle to the outer circular wire. Circular wires within the outer wire subdivide each section into single, double and triple areas. You can find the full description of 501 double out game with rules of playing on dartboard [here](http://www.nicedarts.com/how_to_501.html).

 The 501 double out game:
Each leg your score start from 501 and your darts score will decrease this score. In each turn you will have three darts to throw. The leg finish if your score is 0 and your last dart is in the double. A new leg starts with the score 501 just after finishing the previous one and  **the remaining darts of the finishing turn will not be considered used.** If your current turn score is greater than your score, then you will lose remaining darts of this turn and the score will remain same. If one uses all his darts and neither the leg finishes nor the turn, then the current turn score will be added to the total score if it is a valid turn. It is highly recommended to use our offline tester given below to understand the gaming process more clearly.

 Examples:

8. If your score 501 before the turn and you double 20, triple 19 and bull's eye, then you earn in this turn 2\*20+3\*19+2\*25=147 score, then your scores after this turn is 501-147=354.
9. If your score 100 before the turn and you throw triple 20 and after that double 20, than this leg finishes, and you use in this turn 2 darts.
10. If your score 20 before the turn and you throw simple 19, then your scores go back to 20 (**because from 1 you cannot checkout with double**), and you lose those darts what in your hand for this turn. This turn we will call invalid turn.
The center of the board is (0,0), the top of the board is (0,-1), the left side is (-1,0), etc. So the dartboard is a circle of radius 1. For every tests belongs an Gaussian distribution with zero expected value and a standard deviation between 0 and 1. This will responsible for the throw precision. Every player has some (between 2 to 5) preferred place where he like to throw, to this place the throws are more precise. If your throw target covered by multiple preferred area than the better deviation is selected. All these are hidden. More description in the example section.

Firstly you can throw darts for practice. This phase is to detect how the current player play darts. After that you can use 99999 darts. Your score is the sum of the score of your valid turns. You can not aim your darts outside the 1.2 radius. ( If the dart flew outside this radius that is valid but your target can not be outside this circle.)

### Input + Output

 The output begins with a line containing an integer the number **N ≤ 100000** of darts you would like to throw in practice mode. After that you can throw **N** darts

15. **A B**
 A,B can be double numbers this is your target position

after each throw  **you will get the answer in one line**  with format:

17. **C D M S**
(C,D) is the real position where your darts flew. M is an integer between 1 and 3 representing the dart multiplier (1- simple, 2- double, 3- triple) and S is another integer number representing dart score (without a multiplier).
Now the compete mode begins. Here will use 99999 darts. (This doesn't mean you will throw 99999 darts. You may lose some dart in invalid turns.) The communication is the same as the training mode.

 *Attention: the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout). Failure to flush the output buffer will result in Time Limit Exceeded verdict.*

### Test Case Generation

The 20% of the test files the deviation **V** selected from \[0.01,0.1\], the 60% selected from \[0.1,0.3\], and the remaining 20% selected from \[0.3,1\] interval.
After that generate a number P between 2 and 5 (inclusive) how many preferred position has the player. Each preferred position is a circular area with center (X,Y) and radius R. Then the test case generator will generate X, Y and R, where (X,Y) are two real numbers inside the 1 radius circle centered at (0,0) and R is between 0.05 and 0.3. A multiplier Z for each preferred place will be generated, Z will be between 0.25 and 0.75, this means here the deviation is less by this multiplier (Z\*V instead of V).

We have 30 official test files. You must correctly solve all test files to receive "Correct Answer". During the contest, your overall score is the sum of the scores on the first 6 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 24 test files. Note, that public part of the tests may not contain some border cases.

### More information about the game: 

[ Hint. ](http://www.nicedarts.com/how_to_501.html)

 The dimensions of the[ board. ](http://www.darts501.com/Bristleboards.htm)

26. outside of the double 170mm from the center.
27. outside of the triple 107 mm from the center.
28. bull's eye diameter is 12.7 mm.
29. bull's diameter is 31.8 mm.
30. double and triple inside width is 8 mm.
For normal distribution we have used this [implementation.](http://www.cs.gmu.edu/~sean/research/mersenne/MersenneTwister.java)

### Example (of a throw) 

Lets the current deviation V = 0.1, and we have two preferred places

34. the first center is (0,0.5) with radius 0.1, and the deviation multiplier 0.5 this means in this circle the deviation is 0.05.
35. the second center is (-0.3,0.0) with radius 0.2, and the deviation multiplier 0.3 this means in this circle the deviation is 0.03.
if our target is (0,0.55) which is inside the first preferred place then the deviation multiplier here will be 0.05. So we ask two random numbers (K,L) from our normal distribution generator
(which generate with 0 expected value and 1 standard deviation). The real target will be (0+K\*0.05,0.55+L\*0.05). E.g. K=0.11, L= -0.28
then the dart will flew (0.0055,0.536).

If our target is (0,0.7) which is outside of both the preferred places then the deviation multiplier here will be V = 0.1. In that case, the real target will be (0+K\*V, 0.7+L\*V), where (K,L) are two random numbers generated from our normal distributor.

### Offline tester/Visualization 

[Darts.jar](http://www.codechef.com/download/Darts_New.jar)

[How to use it.](http://www.codechef.com/download/darts.txt)

[Final Darts.jar](www.codechef.com/download/dartspractice.jar)

Note: we can not guarantee the offline tester produce the same score as the online judge.
