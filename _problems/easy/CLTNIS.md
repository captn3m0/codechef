---
{"category_name":"easy","problem_code":"CLTNIS","problem_name":"Tennis","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"meooow","problem_tester":null,"date_added":"1-02-2019","tags":{"0":"cole2019","1":"easy","2":"geometry","3":"meooow","4":"ternary"},"editorial_url":"https://discuss.codechef.com/problems/CLTNIS","time":{"view_start_date":1551205800,"submit_start_date":1551205800,"visible_start_date":1551205800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>


Tennis is a popular game. Consider a simplified view of a tennis game from directly above. The game will appear to be played on a 2 dimensional rectangle, where each player has his own court, a half of the rectangle. Consider the players and the ball to be points moving on this 2D plane. The ball can be assumed to always move with fixed velocity (speed and direction) when it is hit by a player. The ball changes its velocity when hit by the other player. And so on, the game continues.

Chef also enjoys playing tennis, but in $n + 1$ dimensions instead of just 3. From the perspective of the previously discussed overhead view, Chef's court is an $n$-dimensional [hyperrectangle](https://en.wikipedia.org/wiki/Hyperrectangle) which is axis-aligned with one corner at $(0, 0, 0, \dots, 0)$ and the opposite corner at $(l_1, l_2, l_3, \dots, l_n$). The court of his opponent is the reflection of Chef's court across the $n - 1$ dimensional surface with equation $x_1 = 0$.

At time $t=0$, Chef notices that the ball is at position $(0, b_2, \dots, b_n)$ after being hit by his opponent. The [velocity components](https://brilliant.org/wiki/vector-terminology/#representation-on-a-coordinate-plane) of the ball in each of the $n$ dimensions are also immediately known to Chef, the component in the $i^{th}$ dimension being $v_i$. The ball will continue to move with fixed velocity until it leaves Chef's court. The ball is said to leave Chef's court when it reaches a position strictly outside the bounds of Chef's court. Chef is currently at position $(c_1, c_2, \dots, c_n)$. To hit the ball back, Chef must intercept the ball before it leaves his court, which means at a certain time the ball's position and Chef's position must coincide.

To achieve this, Chef is free to change his speed and direction at any time starting from time $t=0$. However, Chef is lazy so he does not want to put in more effort than necessary. Chef wants to minimize the maximum speed that he needs to acquire at any point in time until he hits the ball. Find this minimum value of speed $s_{min}$.

**Note:** If an object moves with fixed velocity $\vec{v}$ and is at position $\vec{x}$ at time $0$, its position at time $t$ is given by $\vec{x} + \vec{v} \cdot t$.

### Input

- The first line contains $t$, the number of test cases. $t$ cases follow.
- The first line of each test case contains $n$, the number of dimensions.
- The next line contains $n$ integers $l_1, l_2, \dots, l_n$, the bounds of Chef's court.
- The next line contains $n$ integers $b_1, b_2, \dots, b_n$, the position of the ball at $t=0$.
- The next line contains $n$ integers $v_1, v_2, \dots, v_n$, the velocity components of the ball.
- The next line contains $n$ integers, $c_1, c_2, \dots, c_n$, Chef's position at $t=0$.

### Output

- For each test case, output a single line containing the value of $s_{min}$. Your answer will be considered correct if the absolute error does not exceed $10^{-2}$.

### Constraints

- $1 \leq t \leq 1500$
- $2 \leq n \leq 50$
- $1 \leq l_i \leq 50$
- $0 \leq b_i \leq l_i$ and $b_1 = 0$
- $-10 \leq v_i \leq 10$ and $v_1 > 0$
- $0 \leq c_i \leq l_i$
- It is guaranteed that the ball stays in the court for a non-zero amount of time.

### Sample Input

    2
    2
    3 4
    0 2
    2 -2
    2 2
    3
    10 10 10
    0 0 0
    1 1 1
    5 5 5

### Sample Output

    2.0000
    0.0000

### Explanation

**Case 1:**  The court is 2-dimentional.  
![sample](https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/COLE2019/CLTNIS/tennis_sample.png)

The ball's trajectory is marked in red. For Chef it is optimal to move along the blue line at a constant speed of 2 until he meets the ball at the boundary.

**Case 2:** The court is 3-dimensional and the ball is coming straight at Chef. So it is best for Chef to not move at all, thus $s_{min} = 0$.