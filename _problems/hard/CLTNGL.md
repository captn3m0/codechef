---
{"category_name":"hard","problem_code":"CLTNGL","problem_name":"Triangles in a Grid","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"meooow","problem_tester":null,"date_added":"5-04-2018","tags":{"0":"cole2018","1":"hard","2":"meooow","3":"mobius"},"editorial_url":"https://discuss.codechef.com/problems/CLTNGL","time":{"view_start_date":1524062940,"submit_start_date":1524062940,"visible_start_date":1524062940,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>  

Chef has a grid with $N$ equally spaced horizontal lines and $M$ equally spaced vertical lines. The points where a horizontal and a vertical line intersect are called grid points.

Chef draws a triangle at random on this grid such that the vertices of the triangle lie on grid points and the area of the triangle is non-zero. All triangles satisfying this criteria are equally likely to be drawn by Chef.

Calculate the [expected number](https://en.wikipedia.org/wiki/Expected_value#Definition) of grid points on the perimeter of this triangle, including the three vertices. It is guaranteed that it will be possible to express this value as an irreducible fraction $\frac{p}{q}$ where $q$ is coprime to $10^9 + 7$. Let $r$ be the [modular mutiplicative inverse](https://en.wikipedia.org/wiki/Modular_multiplicative_inverse) of $q$ with respect to modulus $10^9 + 7$. Output the answer as $p \cdot r \pmod{10^9 + 7}$.

###Input:
- The first and only line contains 2 integers $N$ and $M$.

###Output:
- Output in a single line the answer $p \cdot r \pmod{10^9 + 7}$.

###Constraints 
- $2 \leq N, M \leq 10^6$

###Sample Input 1:
    2 2

###Sample Output 1:
    3

###Sample Input 2:
    2 3

###Sample Output2:
    333333339
	
###Explanation:
- **Sample 1**: The are 4 eligible triangles with vertices on grid points and non-zero area. All of them have 3 grid points on their perimeter.  
- **Sample 2**: There are 12 triangles that have 3 grid points on the perimeter and 6 triangles that have 4 grid points on the perimeter. The expected value can be calculated as $3 \frac{12}{18} + 4 \frac{6}{18} = \frac{10}{3}$. So $p=10$, $q=3$ and $r=333333336$. The answer is $10 \cdot 333333336 \pmod{10^9 + 7} = 333333339$.