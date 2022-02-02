---
{"category_name":"hard","problem_code":"CMPVIRS","problem_name":"Computer Virus","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kr_abhinav","problem_tester":null,"date_added":"3-04-2018","tags":{"0":"codemelange","1":"combinatorics","2":"hard","3":"kr_abhinav","4":"math"},"editorial_url":"https://discuss.codechef.com/problems/CMPVIRS","time":{"view_start_date":1522873800,"submit_start_date":1522873800,"visible_start_date":1522873800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>There are $N$ computer screens in a line from left to right. The $i^{th}$ screen from left displays number $i (1 \le i \le N) $. Now these computer screens are divided into $m$ groups. You are given $d_1,d_2,d_3....d_m (1 \le d_1 \le d_2 \le d_3... \le d_m$ and $\sum_{i=1}^{m} d_i = N)$. This means that $1^{st}$ group contains screens displaying numbers from $1$ to $d_1$, $2^{nd}$ group contains numbers from  $d_1+1$ to $d_1+d_2$ and so on. Now there is a computer virus which is infecting these computer screens. Initially, all screens are uninfected. 

Now, these computers perform the following operations as long as there exists an uninfected screen: 

During each operation step, two things happen. First, the virus infects the rightmost uninfected screen in each group. Then, every uninfected screen updates the value on its screen to the sum of all values on uninfected screens to its left, and its own screen, modulo $10^9+7$. 

For given $N$ and  $d_1,d_2...d_m$ find sum of all numbers on the screens of the computers (eventually, after everything becomes infected, and this process stops) modulo $10^9+7$.
###Input:
- First line contains two integers $N$  and $m$.
- Next line contains $m$ space separated integers denoting the array $d_1,d_2.....,d_m$.

###Output:
Output in a single line sum of all numbers on the screens of computers modulo $10^9+7$.

###Constraints 
- $2 \leq N \leq 10^7$
- $1 \leq m \leq 10^3$
- $\sum_{i=1}^{m} d_i = N$
- $1 \le d_1 \le d_2 \le ...d_{m-1} \le d_m$ 


###Sample Input:

6 2

3 3

###Sample Output:
33
	
###EXPLANATION:
There are two groups.

Group1    Group2

1 2 **3**                4 5 **6** (3 and 6 infected)

1 3 **3**                   7 12 **6** (update value on each uninfected screen by sum of all numbers on uninfected screens to its left including the current screen modulo 1000000007)

1 **3** **3**             7 **12** **6** (Now virus infects the rightmost uninfected computer in each group)

1 **3** **3**             8 **12** **6** (update value on each uninfected screen by sum of all numbers on uninfected screens to its left including the current screen modulo 1000000007)

**1** **3** **3**        **8** **12** **6**(Virus infects the rightmost uninfected computer in each group)

 

Answer = (1+3+3+8+12+6)% 1000000007 = 33
