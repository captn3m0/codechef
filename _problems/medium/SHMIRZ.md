---
{"category_name":"medium","problem_code":"SHMIRZ","problem_name":"Shops in Mirzapur","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"xodiac","problem_tester":null,"date_added":"25-12-2018","tags":{"0":"convex","1":"decomposition","2":"medium","3":"pelt2019","4":"squareroot","5":"xodiac","6":"xodiac"},"time":{"view_start_date":1547476200,"submit_start_date":1547476200,"visible_start_date":1547476200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Problem description.</p>
There are $N$ shops in a straight line some where in Mirzapur each of them selling same type of chocolate. <br>
Each shops have their own price of chocolate . Formally , $i$-th shop sells $A[i]$ number of chocolates in exchange of $1$ coin . Also each shop will give $B[i]$ number of chocolates for free to any customer that buys chocolates from their shop .
<br>
Chef likes chocolates very much so he regularly buys chocolates from any one shopkeeper who will give him maximum number of chocolates . <br/>
Chef also likes playing with intervals . So each time Chef will have $x$ number of coins in his pocket and two integers $L$ and $R$ . Chef will look at every shop that lies between $L$ and $R$ and will buy chocolates from that shop which will give him maximum number of chocolates for $x$ coins .
<br>
Also the position of shops are changing with time . 
<br> <br>
More formally there are $Q$ actions of two types that are happening in a sequence. <br>
$1$ $i$ $j$                           $i$-th shop is shifted after $j$-th shop. <br>
$2$ $L$ $R$ $x$                 Chef arrives at market to buy chocolates with $x$ coins in his pocket along with two integers $L$ and $R$ as described above.  <br> <br>

<p> <b> Note that there are only $10$% queries of type $1$ .</b></p>
<br><br>

<h3>Input:</h3>
<ul>
<li>First line will contain $N$, number of shops.</li> 
 <li>Next $N$ lines contains two space separated integers $A[i]$ and $B[i]$ as described above</li> 
<li>Next line contain one integer $Q$ number of queries. </li>
<li>Next $Q$ line will contain queries of either of two types : $1)$ $1$ $i$ $j$   ,     $2)$  $2$ $L$ $R$ $x$ <br>
</li>
 
</ul>
<h3>Output:</h3>
Print the answer for each query of type two in a new line. <br>

<h3>Constraints<h3> 
<li>$1 \leq N \leq 50000$</li>
<li> $1 \leq A[i] ,B[i] \leq 10^5$</li>
<li> $1 \leq Q \leq 10^5$</li>
<li> $1 \leq i \leq j \leq N$</li>
<li> $1 \leq L \leq R \leq N$</li>
<li> $1 \leq x \leq 10^5$</li>

<h3>Sample Input:</h3>
5     <br/>
2 2  <br/>
4 5<br/>
1 3<br/>
3 6<br/>
7 1<br/>
3<br/>
2 2 3 3<br/>
1 2 4<br/>
2 2 3 3<br/>
        
<h3>Sample Output:</h3>
17 <br/>
15 <br/>
	
<h3>EXPLANATION:</h3>
Before shifting shops in range $[2,3]$ are $(4,5) and (1,3)$ out of which $1$-st shop will give maximum chocolate i.e. $4*3+5=17$. <br>
After shifting sequence of shop will be as below : <br>
2 2  <br/>
1 3<br/>
3 6<br/>
4 5<br/>
7 1<br/>
 Therefore  shops in range $[2,3]$ are $(1,3) and (3,6)$ out of which $2$-nd shop will give maximum chocolate i.e. $3*3+6=15$. <br>
