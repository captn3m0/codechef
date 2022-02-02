---
{"category_name":"easy","problem_code":"SANITIZE","problem_name":"Low Budget Sanitization","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/KtfvPod8dAY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jay_1048576","problem_tester":"","date_added":"8-04-2021","tags":{"0":"cook128","1":"easy","2":"geometry","3":"jay_1048576","4":"math"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SANITIZE","time":{"view_start_date":1618772404,"submit_start_date":1618772404,"visible_start_date":1618772404,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SANITIZE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK128/mandarin/SANITIZE.pdf), [Russian](https://www.codechef.com/download/translated/COOK128/russian/SANITIZE.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK128/bengali/SANITIZE.pdf) as well.

**This is an Interactive Problem.**

Chef found a dirty-looking square plate in his kitchen. Obviously, it is full of germs. Specifically, there are $N$ germs lying in the whole plate. The plate has dimensions $M\times M$ and can be imagined as a 2-dimensional square space bounded by the lines $X=0$, $Y=0$, $X=M$ and $Y=M$. Chef knows that each germ lies at a point with integer coordinates within this plate and no two germs lie at the same point. But he doesn't know the exact location of the germs. Each germ has a unique integer ID between $1$ and $N$.

Chef wants to sanitize this plate, i.e., make it germ-free. But because of low budget, he can afford only $N$ ml of sanitizer. Each germ requires $1$ ml of sanitizer to be killed. So, he needs to be careful not to waste even a single drop of it!

Luckily, he also has a germ sensor with him which works as follows $-$

It send a laser beam of light along a straight line $A\cdot x+B\cdot y=C$ and returns two things:
- The ID of the germ having the shortest perpendicular distance to this line. If there are multiple such germs, any of them may be chosen.
- The distance of this germ from the line.  

But again, because of low budget, he is using a cheap model which can be used at most $2N$ times.

Help him kill all the germs. You can use the sensor or apply sanitizer in an arbitrary order. Note that the sensor does not sense killed germs.

###Interaction:
- The first line of input contains an integer $T$ - the number of test cases.
- For each test case, first read a single line containing two integers $N$ and $M$ - the number of germs and the size of the plate.
- Then you may ask queries in the following format $-$
    - To use the sensor, print a single line containing $4$ space separated integers $1$, $A$, $B$, $C$ satisfying the constraints $-128\leq A,B\leq 128$ and $-10^9\leq C\leq 10^9$ where $A\cdot x+B\cdot y=C$ is the line you wish to query. If you ask an invalid query or exceed $2N$ queries of this type, the grader returns $-1$. Otherwise, the grader returns two space separated integers $U$ and $D$, where $U$ is the ID of the germ closest to this line and $D$ is the perpendicular distance of the germ from the line multiplied by $\sqrt{A^2+B^2}$. It can be shown that $D$ will always be an integer under the given constraints and scaling factor.
    - To apply $1$ ml of sanitizer at the point $(X, Y)$, print a single line containing $3$ space separated integers $2$, $X$, $Y$ satisfying the constraints $0\leq X, Y\leq M$. If there is any germ present at this point, it will be killed. Then the grader returns a single integer $V$. If you ask an invalid query or exceed $N$ queries of this type, $V=-1$. Otherwise, if all the germs are killed after this query then $V=1$ else $V=0$. As soon as you receive $1$, the test case ends and you should continue solving the remaining test cases.
- If you receive $-1$ from the grader, terminate the program immediately to receive the Wrong Answer verdict otherwise you may receive any verdict.

**Don't forget to flush your output after printing each line!**

###Constraints: 
- $1\leq T\leq 1024$
- ​$1\leq M\leq 10^9$
- $1\leq N\leq 4096$
- All germs lie at points with integer coordinates within the plate.
- No two germs lie at the same point.
- No two germs have the same ID.
- ID of each germ lies between $1$ and $N$ inclusive.
- The sum of $N$ over all test cases does not exceed $4096$.

###Example:
```
You          Grader

             1
             2 10
1 1 1 2
             1 4
1 -1 2 -5
             2 3
2 1 5
             0
1 3 0 1
             2 23
2 8 0
             1
```

###Explanation:
There are $2$ germs lying on a $10\times 10$ plate. The germs lie on the points $(1, 5)$ and $(8, 0)$ and have IDs $1$ and $2$, respectively.

The first query is a sensor query with the line $x+y=2$. The perpendicular distance of the first germ from this line is $2\sqrt{2}$ units and the distance of the second germ is $3\sqrt{2}$ units. Since the first germ is closer, $U=1$ and $D=2\sqrt{2}\times \sqrt{1^2+1^2}=4$ is returned.

The second query is a sensor query with the line $-x+2y=-5$. The perpendicular distance of the first germ from this line is $\frac{14\sqrt{5}}{5}$ units and the distance of the second germ is $\frac{3\sqrt{5}}{5}$ units. Since the second germ is closer, $U=2$ and $D=\frac{3\sqrt{5}}{5}\times \sqrt{(-1)^2+2^2}=3$ is returned.

The third query is applying sanitizer at the point $(1,5)$. The first germ lies at this point and is killed. Since, there is still $1$ germ alive, $V=0$ is returned.

The fourth query is a sensor query with the line $3x=1$. The only germ alive is the second germ which is at a distance of $\frac{23}{3}$ units from this line. So, $U=2$ and $D=\frac{23}{3}\times \sqrt{3^2+0^2}=23$ is returned.

The fifth query is applying sanitizer at the point $(8,0)$. The second germ lies at this point and is killed. Since, all germs are killed, $V=1$ is returned.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>