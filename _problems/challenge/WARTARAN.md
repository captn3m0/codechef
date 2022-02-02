---
{"category_name":"challenge","problem_code":"WARTARAN","problem_name":"Chef and War with Taran (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"taran_1407","problem_tester":null,"date_added":"26-06-2018","tags":{"0":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/WARTARAN","time":{"view_start_date":1531733410,"submit_start_date":1531733410,"visible_start_date":1531733410,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/mandarin/WARTARAN.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/russian/WARTARAN.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY18/vietnamese/WARTARAN.pdf">Vietnamese</a> as well.</h3>


Technology has advanced so much that it is now common for everyone to have robots do their work. Codechef is still the popular choice of competitive programming platform, the reason being great quality of problems.
           
One fine day, Taran decided to gain access to all problems by beating Master Chef of Codechef in a robot war.

There are $N$ types of robots numbered $1$ through $N$ with an infinite supply for each type. If two robots of different types fight, one of them wins and the other loses; you are given a matrix $M$ with size $N\times N$, where for each valid $i, j$, a robot of type $i$ wins against a robot of type $j$ if $M_{ij} = 1$. If two robots of the same type fight, the result is a draw.

Chef will buy $N$ robots in total and Taran will also buy $N$ robots in total. Both Taran and Chef can buy any number of robots of each type, including zero. Taran cleverly decided to buy his robots only after knowing the $N$ robots bought by Chef, so that his chances of winning are maximized.

After buying the robots, the war begins. It happens in $N$ turns; two robots fight in each turn, one of them is Chef's and the other is Taran's. For the first $A$ turns, Chef chooses his robot as well as Taran's robot which will fight in the current turn. For the next $B$ turns, Taran chooses his robot as well as Chef’s robot that will fight against each other. At the end of a turn, both robots are completely destroyed and can't be used again.

Since Master Chef trusts his talented programmers, you were asked to fight against Taran to save their problems for future contests. Your goal is to maximize the number of turns when your robot won a fight.

_P.S.: After seeing this problem, Taran decided to befriend Master Chef instead. The problems are safe now._

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $A$ and $B$.
- For each $i$ ($1 \le i \le N$), the $i$-th of the following $N$ lines contains $N$ space-separated integers $M_{i1}, M_{i2}, \dots, M_{iN}$.

### Interaction
- After reading the input, you should print a line containing $N$ integers. For each valid $i$, the $i$-th of these integers denotes the number of robots of type $i$ you bought.            
- Afterwards, you should read a line containing $N$ integers describing Taran's robots in the same format.
- Then the war begins. For each of the first $A$ turns, you should print a line containing two space-separated integers $x$ and $y$, where $x$ is the type of the robot fighting for Chef and $y$ is the type of robot fighting for Taran.
- For each of the next $B$ turns, the judge will print a line containing two space-separated integers $x$ and $y$, describing the robots fighting in this turn in the same format.

You are not allowed to buy less or more robots than $N$ or to choose (neither for Chef nor for Taran) a robot of a type such that there are no robots of this type remaining. If you do that, the verdict of your submission will be Wrong answer and interaction will terminate immediately. Also, remember to flush the output after printing each line, or the judge will wait for your response forever and the verdict of your submission will be Time Limit Exceeded.

**It is to be noted that first, you have to read input for first test case, followed by interaction for the first test case, then input for second test case and its interaction and so on.**

### Constraints
- $T = 5$
- $N = 1,000$
- $0 \le A, B \le N$
- $1 \le A+B \le N$
- $N$ is divisible by $A+B$
- $0 \le M_{ij} \le 1$ for each valid $i, j$
- $M_{ij}+M_{ji} = 1$ for each valid $i \neq j$
- $M_{ii} = 0$ for each valid $i$

### Scoring

Your score for each test case is the number of fights won by your robots. Your score for each test file is the sum of your scores for all test cases.

### Test Generation Plan

There are twenty test files. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4 out of 20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to the sum of your program's scores over the other sixteen test files.

The matrix $M$ is generated randomly. There are four types of tests:
- type 1: $A = B = 250$
- type 2: $A$ and $B$ are integers chosen uniformly randomly in the range $[0, 10]$ such that $A+B = 10$
- type 3: $A$ and $B$ are integers chosen uniformly randomly in the range $[0, 100]$ such that $A+B = 100$
- type 4: $A$ and $B$ are integers chosen uniformly randomly in the range $[0, 1000]$ such that $A+B = 1000$

### Example
```
1
5 3 2
0 1 1 0 0
0 0 1 0 1
0 0 0 1 1
1 1 0 0 0
1 0 0 1 0

Interaction

User                                            Judge

2 0 2 1 0
                                                1 1 2 0 1
1 2
4 1
1 3
                                                3 3
                                                3 5
```

### Explanation

Note that the example test does not satisfy the constraints on $T$ and $N$ for clarity. These constraints will hold for all real tests. Also note that the judge's interaction may vary, this example only shows one possible way the interaction could go.

The player chose 2 robots of the 1st type, 2 robots of the 3rd type and 1 robot of the 4th type. 

The judge chose 2 robots of the 3rd type and 1 robot each of types 1, 2 and 5.

The matches went as follows:
- The player chose a robot of the 1st type against Taran's robot of the 2nd type and gained a point.
- The player chose a robot of the 4th type against Taran's robot of the 1st type and gained another point.
- The player chose a robot of the 1st type against Taran's robot of the 3rd type and gained one more point.
- The judge chose the player's robot of the 3rd type against the judge's remaining robot of the 3rd type. The player gained no points.
- The judge chose the player's robot of the 3rd type against the judge's robot of the 5th type. The player gained one point.

The player's score for this test case is 4.
