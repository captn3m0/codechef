---
{"category_name":"hard","problem_code":"KOL16C","problem_name":"Zeroes VII","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":6,"source_sizelimit":40000,"problem_author":"kol_adm","problem_tester":null,"date_added":"21-12-2016","tags":{"0":"kol_adm"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Factorial n or n! is defined as below:
<pre>
n! = 1*2*3*...*n
</pre>
</p>

<p>For example <b>7! = 1*2*3*4*5*6*7 = 5040</b>. Now, if we prime factorize a factorial we will be able to find the frequency of each prime in it For example <b>7!= 5040 = 2<sup>4</sup>*3<sup>2</sup>*5*7</b>. So there are exactly four <b>2</b>'s, two <b>3</b>'s, one <b>5</b> and one <b>7</b> in <b>7!</b>. For factorials of large numbers prime-factorization is not a good idea and there are many better ways to find out frequency of prime numbers it factorials of large number. Now consider <b>15</b> numbers <b>1!, 2!, 3!, 4!, 5!, 6!, 7!, 8!, 9!, 10!, 11!, 12!, 13!, 14!, 15!</b> and a set of consecutive prime numbers <b>{3, 5, 7, 11, 13}</b> (2nd, 3rd, 4th, 5th and 6th) and an integer <b>2</b> (The frequency) and you are asked to find how many of these numbers have one prime from the set of primes exactly two times. The answer will be <b>9</b> and these 9 numbers are shown below:
<table>
<tbody>
    
<tr><b><td><b>Value</b></td><td><b>Primes that are present exactly 2 times </b></td></b></tr>
<tr><td>6!</td><td>3</td></tr>
<tr><td>7!</td><td>3</td></tr>
<tr><td>8!</td><td>3</td></tr>
<tr><td>10!</td><td>5</td></tr>
<tr><td>11!</td><td>5</td></tr>
<tr><td>12!</td><td>5</td></tr>
<tr><td>13!</td><td>5</td></tr>
<tr><td>14!</td><td>5, 7</td></tr>
<tr><td>15!</td><td>7</td></tr>

    
    </tbody>
    </table>
<p>In this problem you are asked to solve a generalized version of this problem. Given a set of factorials of consecutive numbers <b>F</b>, a set of consecutive prime numbers <b>P</b> and an integer <b>t</b>, you job is two find out how many of the numbers in  <b>F</b> contains any one of the prime numbers from set <b>P</b> exactly <b>t</b> times. But if more than one prime from <b>P</b> is present exactly <b>t</b> times in some number, it is ok.  </p>

<h3>Input</h3>
The first line contains a positive integer <b>C (0&lt;C&lt;51)</b> which denotes the total number of test cases to follow. Each of the next <b>C</b> lines consists input for a single test case. Each line contains five positive integers <b>low, high (0 &lt; low &lt; high ≤ 2*10<sup>16</sup>), plow, phigh (0 &lt; plow &lt; phigh ≤ 3000000)</b> and <b>t (0 &lt; t ≤ 300000)</b>. These numbers denotes that you have to deal with the set of factorial of consecutive numbers<b> low!, (low+1)!, (low+2)! ..., (high-1)!, high!</b> and a set of primes <b>P</b> which contains <b>P<sub>plow</sub>, P<sub>plow+1</sub>, ..., P<sub>phigh</sub></b>. Primes are numbered starting from <b>1</b>, so <b>P<sub>1</sub></b> is actually <b>2, P<sub>2</sub>=3, P<sub>3</sub>=5, P<sub>4</sub>=7, P<sub>5</sub>=11</b>  etc. You will have to find how many of these factorials contains one or more primes from this set <b>P</b> exactly <b>t</b> times.  

<h3>Output</h3> 
<p>For each test case produce one line of output. This line contains at integer <b>M</b>, which denotes how many of the numbers <b>low!, (low+1)!, (low+2)! ..., (high-1)!, high!</b> contains at least one prime from set <b>P</b> exactly <b>t</b> times.</p>    


<h3>Sample</h3>
<pre>
<b>Input</b>
2
10 20 1 5 3
10 20 1 5 6

<b>Output</b>
5
3
</pre>


