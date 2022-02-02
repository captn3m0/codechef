---
{"category_name":"easy","problem_code":"PCJ18F","problem_name":"Chef and Fencing","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"madhav_1999","problem_tester":null,"date_added":"29-07-2018","tags":{"0":"madhav_1999","1":"madhav_1999","2":"pcj","3":"prakhar17252","4":"proconjunior","5":"tanmay28"},"editorial_url":"https://discuss.codechef.com/problems/PCJ18F","time":{"view_start_date":1534176000,"submit_start_date":1534176000,"visible_start_date":1534176000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Today, Chef has a fencing job at hand and has to fence up a surface covering $N$ points. 

To minimize his work, he started looking for an algorithm that had him fence the least amount of length. 

He came up with the Convex Hull algorithm, but soon realized it gave him some random shape to fence. However, Chef likes rectangles and has a favourite number $M$. 

Help him find the minimum perimeter he has to fence if he wants to fence a rectangle, with slope of one of the sides as $M$, to cover all the points.

###Input:

- The first line contains two integers $N$ and $M$, the number of points and the Chef's favourite Number.
- The next n lines contain two space separated integers $X$ and $Y$, the coordinates of the point.

###Output:
Print a single decimal number, denoting the perimeter of the rectangle. Answer will considered correct if it has absolute error less than $10^{-6}$.

###Constraints 
- $2 \leq N \leq 1000000$
- $-1000 \leq M \leq 1000$
- $-1000000 \leq X \leq 1000000$
- $-1000000 \leq Y \leq 1000000$

###Sample Input:
        4 1
        0 1
        0 -1
        1 0
       -1 0

###Sample Output:
        5.656854249492380

### Note:
- As the input size is large, it is recommended to use Fast IO.