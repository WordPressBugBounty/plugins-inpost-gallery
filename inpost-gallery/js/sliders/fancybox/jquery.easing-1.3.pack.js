/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration

jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(a,e,f,b,c){return jQuery.easing[jQuery.easing.def](a,e,f,b,c)},easeInQuad:function(a,e,f,b,c){return b*(e/=c)*e+f},easeOutQuad:function(a,e,f,b,c){return-b*(e/=c)*(e-2)+f},easeInOutQuad:function(a,e,f,b,c){return 1>(e/=c/2)?b/2*e*e+f:-b/2*(--e*(e-2)-1)+f},easeInCubic:function(a,e,f,b,c){return b*(e/=c)*e*e+f},easeOutCubic:function(a,e,f,b,c){return b*((e=e/c-1)*e*e+1)+f},easeInOutCubic:function(a,e,f,b,c){return 1>(e/=c/2)?b/2*e*e*e+f:b/2*((e-=2)*e*e+2)+f},easeInQuart:function(a,e,f,b,c){return b*(e/=c)*e*e*e+f},easeOutQuart:function(a,e,f,b,c){return-b*((e=e/c-1)*e*e*e-1)+f},easeInOutQuart:function(a,e,f,b,c){return 1>(e/=c/2)?b/2*e*e*e*e+f:-b/2*((e-=2)*e*e*e-2)+f},easeInQuint:function(a,e,f,b,c){return b*(e/=c)*e*e*e*e+f},easeOutQuint:function(a,e,f,b,c){return b*((e=e/c-1)*e*e*e*e+1)+f},easeInOutQuint:function(a,e,f,b,c){return 1>(e/=c/2)?b/2*e*e*e*e*e+f:b/2*((e-=2)*e*e*e*e+2)+f},easeInSine:function(a,e,f,b,c){return-b*Math.cos(e/c*(Math.PI/2))+b+f},easeOutSine:function(a,e,f,b,c){return b*Math.sin(e/c*(Math.PI/2))+f},easeInOutSine:function(a,e,f,b,c){return-b/2*(Math.cos(Math.PI*e/c)-1)+f},easeInExpo:function(a,e,f,b,c){return 0==e?f:b*Math.pow(2,10*(e/c-1))+f},easeOutExpo:function(a,e,f,b,c){return e==c?f+b:b*(-Math.pow(2,-10*e/c)+1)+f},easeInOutExpo:function(a,e,f,b,c){return 0==e?f:e==c?f+b:1>(e/=c/2)?b/2*Math.pow(2,10*(e-1))+f:b/2*(-Math.pow(2,-10*--e)+2)+f},easeInCirc:function(a,e,f,b,c){return-b*(Math.sqrt(1-(e/=c)*e)-1)+f},easeOutCirc:function(a,e,f,b,c){return b*Math.sqrt(1-(e=e/c-1)*e)+f},easeInOutCirc:function(a,e,f,b,c){return 1>(e/=c/2)?-b/2*(Math.sqrt(1-e*e)-1)+f:b/2*(Math.sqrt(1-(e-=2)*e)+1)+f},easeInElastic:function(e,f,g,b,c){var d=1.70158,h=0,i=b;if(0==f)return g;if(1==(f/=c))return g+b;if(h||(h=.3*c),i<Math.abs(b)){i=b;var d=h/4}else var d=h/(2*Math.PI)*Math.asin(b/i);return-(i*Math.pow(2,10*(f-=1))*Math.sin((f*c-d)*(2*Math.PI)/h))+g},easeOutElastic:function(e,f,g,b,c){var d=1.70158,h=0,i=b;if(0==f)return g;if(1==(f/=c))return g+b;if(h||(h=.3*c),i<Math.abs(b)){i=b;var d=h/4}else var d=h/(2*Math.PI)*Math.asin(b/i);return i*Math.pow(2,-10*f)*Math.sin((f*c-d)*(2*Math.PI)/h)+b+g},easeInOutElastic:function(e,f,g,b,c){var d=1.70158,h=0,i=b;if(0==f)return g;if(2==(f/=c/2))return g+b;if(h||(h=c*(.3*1.5)),i<Math.abs(b)){i=b;var d=h/4}else var d=h/(2*Math.PI)*Math.asin(b/i);return 1>f?-.5*(i*Math.pow(2,10*(f-=1))*Math.sin((f*c-d)*(2*Math.PI)/h))+g:.5*(i*Math.pow(2,-10*(f-=1))*Math.sin((f*c-d)*(2*Math.PI)/h))+b+g},easeInBack:function(a,e,f,b,c,d){return null==d&&(d=1.70158),b*(e/=c)*e*((d+1)*e-d)+f},easeOutBack:function(a,e,f,b,c,d){return null==d&&(d=1.70158),b*((e=e/c-1)*e*((d+1)*e+d)+1)+f},easeInOutBack:function(a,e,f,b,c,d){return null==d&&(d=1.70158),1>(e/=c/2)?b/2*(e*e*(((d*=1.525)+1)*e-d))+f:b/2*((e-=2)*e*(((d*=1.525)+1)*e+d)+2)+f},easeInBounce:function(a,e,f,b,c){return b-jQuery.easing.easeOutBounce(a,c-e,0,b,c)+f},easeOutBounce:function(a,e,f,b,c){return(e/=c)<1/2.75?b*(7.5625*e*e)+f:e<2/2.75?b*(7.5625*(e-=1.5/2.75)*e+.75)+f:e<2.5/2.75?b*(7.5625*(e-=2.25/2.75)*e+.9375)+f:b*(7.5625*(e-=2.625/2.75)*e+.984375)+f},easeInOutBounce:function(a,e,f,b,c){return e<c/2?.5*jQuery.easing.easeInBounce(a,2*e,0,b,c)+f:.5*jQuery.easing.easeOutBounce(a,2*e-c,0,b,c)+.5*b+f}});

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 */
